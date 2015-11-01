<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.error{
			color:red;
		}
	</style>
</head>
<body>
	<?php echo validation_errors(); ?>
	<?php echo form_open('Office\add'); ?>
		<input type="text" name="office" 
			   value="<?php echo set_value('office') ?>" />
		<?php echo form_error('office') ?>
		<button>Add</button>
	</form>
</body>
</html>