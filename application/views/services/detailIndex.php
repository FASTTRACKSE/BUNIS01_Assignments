<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<div class = "test_table">
		<table class = "bordered">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Description</th>
			</tr>
		<?php
			foreach($getDataByID as $data){
		?>	
				<tr>
					<td><?php echo $data['ID']; ?></td>
					<td><?php echo $data['bodyName']; ?></td>
					<td><?php echo $data['bodyDesc']; ?></td>			
				</tr>
		<?php
			}
		?>
		</table>
	</div>
</body>
</html>