<?php 

include('Funciones/plantilla.php');
cabecera();

 ?>

<title>Registro</title>
	<div class="agregarUsuario">	
	<form method="POST" action="adduser.php" enctype="multipart/form-data">
		<div>
			<label>Nombre: </label>
			<input type="text" name="txtNombre" placeholder="Nombre" required><br>
			<label>Email: </label>
			<input type="email" name="txtEmail" placeholder="Email" required><br>
			<label>Password: </label>
			<input type="Password" name="txtPwd" placeholder="Password" required><br>
			<label>Imagen: </label>
			<input type="file" name="txtImg"><br>
			<button name="btnAdd" type="submit">Nuevo Usuario</button>			
		</div>
	</form>
	</div>
<?php 

footer();

 ?>