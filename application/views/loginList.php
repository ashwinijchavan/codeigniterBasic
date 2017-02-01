<!DOCTYPE html>
<html>
<head>
	<title>login list</title>
</head>
<body>

<table>	
	<thead>
		<tr>
			<th>username</th>
			<th>password</th>
		</tr>
	</thead>
	<tbody>
		<?php 	

			foreach ($user_list as $value) {
				echo "<tr>";
				echo "<td>".$value->username."</td>";
				echo "<td>".$value->password."</td>";	
				echo "</tr>";
			}
		 ?>
	</tbody>
</table>
</body>
</html>