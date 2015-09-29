<?php  
//$redirect = redirect()->route('profile');
var_dump(route('login'));
//var_dump(route('EMPLOYEES'));
?>
@extends('layouts.header')


<form method="post" action="1138">
	<div class="container">
		<form class="form-signin">
			<label for="txtEmail">Correo</label>
			<input type="text" placeholder="Correo" name="txtEmail" ></iput><br>
			<label for="txtPassword">Contrase&nacute;a</label>
			<input name="txtPassword" placeholder="Contrase&nacute;a" type="password"></input><br>
			<input type="submit" value="Login" title="Login">
		</form>
	</div>		
</form>
</body>
</html>