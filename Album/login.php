<?php 

if (isset($_POST['signInBtn'])) {
	include('Funciones/user.php');
	$msg = '';
	if(loginUser($_POST['txtEmail'], $_POST['txtPwd'])){
		header('Location:perfil.php');
	}else{
		$msg = 'Datos Incorrectos';
	}
	echo $msg.'<br><br>';
	/*if(isUser()){

		header('Location:perfil.php');

	}*/

}

?>


<div class="frmLogin">
	<form method="POST" action="">
		<div>
			<label>Email:</label>
			<input type="mail" placeholder="Email" name="txtEmail"><br><br>
			<label>Password:</label>
			<input type="Password" placeholder="Password" name="txtPwd"><br><br>
			<button name="signInBtn" type="submit">Sign In</button>
		</div>
	</form>
</div>