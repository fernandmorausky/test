<?php var_dump(route('EMPLOYEES')); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>EMPLOYEES</title>
	<script type="text/javascript" src='./js/bootstrap.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body>
<?php //echo url(); ?>
<div class="wrapper">
  <div class="content-main">Main</div>
	<div class="content">
	  	<?php foreach ($EMPLOYEE as $key =>  $EMPLOYEE_i) { 
	  			if ($EMPLOYEE_i->FirstName=='' and $EMPLOYEE_i->LastName=='') {
	  				continue;
	  			}
	  			//echo $key;
	  		?>

	  		<p class="text-leftw"><kbd>Nombre:</kbd>  <?php echo $EMPLOYEE_i->FirstName; ?><br></p>
	  		<p class="text-leftw"> <kbd>Apellido:</kbd>  <?php echo $EMPLOYEE_i->LastName; ?><br>
	  		<form action="<?php echo url()?>" method="post">
	  			<input type="hidden"  value="<?php echo $EMPLOYEE_i->EmployeeCode ; ?>"></input>
	  			<input type="submit" value="Ver"></input>
	  		</form>
	  		<a href="<?php echo url().'/'.$EMPLOYEE_i->EmployeeCode ?>">Ver</a><br><br><br>
	  	<?php } ?>
	</div>
</div>
</body>
</html>
 