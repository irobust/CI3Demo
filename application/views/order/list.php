<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Order No#</th>
				<th>Duration</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $row): ?>
			<tr>
				<td><?php echo $row->orderNumber ?></td>
				<td><?php echo duration($row->orderDate, $row->shippedDate) ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>