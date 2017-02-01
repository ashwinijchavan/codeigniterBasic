<!DOCTYPE html>
<html>
<head>
	<title>login list</title>
</head>
<body>

<table>	
	<thead>
		<tr>
			<th>Name of Firm</th>
			<th>PAN No of Firm</th>
			<th>Mobile number</th>
			<th>Nature of Business Activity</th>
			<th>Type of Legal Entit</th>
			<th>Email</th>
			<th>Name of Owner/Director</th>
			<th>Address</th>
		</tr>
	</thead>
	<tbody>
		<?php 	

			foreach ($list as $value) {
				echo "<tr>";
				echo "<td>".$value->name."</td>";
				echo "<td>".$value->pan."</td>";
				echo "<td>".$value->mobile."</td>";
				echo "<td>".$value->businessType."</td>";
				echo "<td>".$value->entity."</td>";
				echo "<td>".$value->email."</td>";
				echo "<td>".$value->owner."</td>";
				echo "<td>".$value->address."</td>";	
				echo "</tr>";
			}
		 ?>
	</tbody>
</table>
</body>
</html>