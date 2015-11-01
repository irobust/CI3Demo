<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/application/views/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body>
	<?php $this->table->set_heading('Office Code', 'Branch'); ?>
	<?php echo $this->table->generate($result); ?>
	<ul class="pagination">
		<?php echo $this->pagination->create_links(); ?>
	</ul>
</body>
</html>