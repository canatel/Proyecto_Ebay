<?php 

function addUser($nombre,$email,$pwd,$nombreImagen){
	include('conexion.php');

	$sql = "insert into users(user_name,user_email,user_pwd,user_img) values(?,?,?,?)";
	$sentencia = $conexion->prepare( $sql );
	$sentencia->bind_param('ssss', $nombre, $email, md5($pwd), $nombreImagen);

	return $sentencia->execute();
}

function loginUser($email,$pwd){
	include('conexion.php');

	$sql = "select * from users where user_email = '".$email."' and user_pwd= '".md5($pwd)."' ";
	$sentencia = $conexion->query($sql);

	$numRows = $sentencia->num_rows;
	$valor = 0;
	if ($numRows > 0) {
		session_start();
		while ($datos = $sentencia->fetch_object()) {
			$_SESSION['userID'] = $datos->user_id;
			$_SESSION['userName'] = $datos->user_name;
			$_SESSION['userEmail'] = $datos->user_email;
			$_SESSION['userImg'] = $datos->user_img;
		}
		$valor = 1;
	}

	return $valor;
}

function isUser(){

	$valor = 0;

	if (isset($_SESSION)) {
		
		$valor = 1;
	}

	return $valor;
}

function addImage(){
	$nombre = $_FILES['txtImg']['name'];
	$tmp = $_FILES['txtImg']['tmp_name'];
	$folder = 'imagenes/';
	$ext = $_FILES['txtImg']['type'];

	move_uploaded_file($tmp, $folder.$nombre);	

	$extension = '';
	if ($ext == 'image/jpeg') {
		$extension = '.jpg';
	}elseif ($ext == 'image/png') {
		$extension = '.png';
	}elseif ($ext == 'image/gif') {
		$extension = '.gif';
	}

	$nuevoNombre = time();

	$datos = array();
	$datos['rename'] = rename($folder.$nombre, $folder.$nuevoNombre.$extension);
	$datos['nombreImagen'] = $nuevoNombre.$extension;
	return $datos;
}

?>