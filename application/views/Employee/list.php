<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/application/views/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body>
	<header style="background-color: #ccc; padding: 10px;margin-bottom: 20px;">
		<h1>List of Employee</h1>
		<h4><?php echo $this->lang->line('common_subtitle_message'); ?></h4>
		<div style="float:right; position: relative; top: -20px;">
			<?php echo anchor('Language/locale/thai', 'TH'); ?> / 
			<?php echo anchor('Language/locale/english', 'EN'); ?>
		</div>
	</header>
	<div>
		<?php echo form_open('Employee/office') ?>
		<!-- <form method="POST" action="<?php echo site_url('Employee/office') ?>"> -->
			Offices : <?php echo form_dropdown('officeCode', $offices) ?>
			<input type="submit" value="Search" />
		</form>
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>E-mail</th>
				<th>Office</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($employees as $row): ?>
			<tr>
				<td><?php echo anchor('Employee/detail/'.$row->id, $row->name) ?></td>				
				<td><?php echo $row->email; ?></td>
				<td><?php echo $row->city ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>