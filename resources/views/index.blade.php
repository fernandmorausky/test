<?php 
var_dump(route('login'));

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php foreach ($users as $key =>  $EMPLOYEE_i) { 
	  			if ($EMPLOYEE_i->FirstName=='' and $EMPLOYEE_i->LastName=='') {
	  				continue;
	  			}

	  		?>

	  		<p class="text-left"><kbd>Nombre:</kbd><?php echo $EMPLOYEE_i->FirstName; ?><br></p>
	  		<p class="text-left"> <kbd>Apellido:</kbd><?php echo $EMPLOYEE_i->LastName; ?>
	  		<input type="hidden" name="_token" value=" <?php echo csrf_token(); ?>">
	  		<button type="button" class="btn btn-primary" onclick="  alert(<?php print_r($EMPLOYEE_i->EmployeeCode) ;?>);">Ver</button><br><br><br>
	  		<a href="<?php echo url()./.$EMPLOYEE_i->EmployeeCode ?>">Ver</a>

	  	<?php } ?>
</body>
</html>