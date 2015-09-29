<?php 

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Ver Empleado</title>
 </head>
 <body>
 <?php 
foreach ($EMPLOYEE as $key =>  $EMPLOYEE_i) {
	ECHO $EMPLOYEE_i->FirstName;
}

 ?>

 </body>
 </html>