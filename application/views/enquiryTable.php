<!DOCTYPE html>
<html>
<head>
	<title>login list</title>
</head>
<body>

<table>	
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Subject</th>
			<th>Message</th>
		</tr>
	</thead>
	<tbody>
		<?php 	

			foreach ($enquiry_list as $value) {
				echo "<tr>";
				echo "<td>".$value->name."</td>";
				echo "<td>".$value->mail."</td>";
				echo "<td>".$value->mobile."</td>";	
				echo "<td>".$value->subject."</td>";	
				echo "<td>".$value->message."</td>";		
				echo "</tr>";
			}
		 ?>
	</tbody>
</table>
</body>
</html>