<fieldset id="container">

<legend>Datos de usuario</legend>

<form class="text-form" method="POST" name="form_datos" action="http://localhost/WebM/app/Http/Controllers/Controller.php">

	<label class="text-form" >Nombre:</label><input type="email" value="<?php echo $_SESSION['usuario']; ?>" class="datosn" readonly>
	<label class="text-form" >Genero:</label><input type="text" value="<?php echo $_SESSION['genero']; ?>" class="datosg" readonly>
	<label class="text-form" >Correo:</label><input type="text" value="<?php echo $_SESSION['email']; ?>" class="datosc" readonly>
	<label class="text-form" >Contraseña:</label><input type="text" value="<?php echo $_SESSION['pass']; ?>" class="datoss" readonly>

</form>
</fieldset>