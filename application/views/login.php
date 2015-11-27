<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="POST" action="<?php echo site_url('Login/authen') ?>">
		Username: <input type="text" name="username"/><br/>
		Password: <input type="password" name="password" /><br/>
		<input type="submit" value="Login">
	</form>
</body>
</html>