<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="POST" action="<?php echo site_url('Employee/insert') ?>">
		<div>
			<label for="firstName">First Name</label>
			<input type="text" name="firstName" />
		</div>
		<div>
			<label for="lastName">Last Name</label>
			<input type="text" name="lastName" />
		</div>
		<input type="submit" value=" Add " />
	</form>
</body>
</html>