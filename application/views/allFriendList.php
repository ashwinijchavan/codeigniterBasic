<table>
	<tr>
		<th>Name1</th>
		<th>Name2</th>
	</tr>
	<tbody>
		<?php
				
		
		foreach ($list as  $value) {
			echo "<tr>";
			echo "<td>".$value->name1. "</td>";
			echo "<td>".$value->name2. "</td>";
			echo "</tr>";	
		}
		?>
	</tbody>
</table>