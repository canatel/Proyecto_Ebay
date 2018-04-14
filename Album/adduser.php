<?php  
include('Funciones/user.php');

$addImage = addImage();

if (isset($_POST['btnAdd'])) {
	if($addImage['rename']){
		if(addUser($_POST['txtNombre'],$_POST['txtEmail'],$_POST['txtPwd'],$addImage['nombreImagen'])){
			header('Location:login.php');
		}
	}else{
		echo 'Lo sentimos, la imagen no pudo ser guardada';
	}
}else{
	header('Location:index.php');
}

?>