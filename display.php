<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<tbody>
	<tr>
		<th>id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>action</th>
	</tr>
		<?php if($num == 0)
		{
			?>
			<tr>
				<?php 
			echo "No records available"; ?>
		</tr>
		<?php
		}
		else
		{
			foreach ($records as $row)
			{
				?>
				<tr><td><?php echo $row->id ?></td>
					<td><?php echo $row->name ?></td>
					<td><?php echo $row->email ?></td>
					<td><?php echo $row->mobile ?></td>
				<td>	<button><a href="<?php echo base_url()?>task/delete?id=<?php echo $row->id ?>">delete</a></button>
					<button><a href="<?php echo base_url()?>task/update" value ="<?php echo $row->id ?>" >update</a></button>

				</td>
				</tr>
				</tbody>
				<?php
			}
		}
			?>
</table>
</body>
</html>