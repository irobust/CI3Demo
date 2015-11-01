<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>
		<span class="label">EmployeeNumber: </span>
		<span class="value"> <?php echo $employee->employeeNumber ?></span>
	</div>
	<div>
		<span class="label">Name: </span>
		<span class="value"> <?php echo $employee->firstName.' '.$employee->lastName ?></span>
	</div>
	<div>
		<span class="label">Email: </span>
		<span class="value"> <?php echo $employee->email ?></span>
	</div>

	<?php echo anchor('Employee', 'Back'); ?>
</body>
</html>