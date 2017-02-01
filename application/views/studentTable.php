 <table>
	<caption>student data</caption>
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>Qualification</th>
			<th>Profession</th>
			<th>Status</th>
			<th>Mobile No</th>
		</tr>
	</thead>
	<tbody>
		 <?php 
		 foreach ($list as  $value) {
		 		 echo "<tr>";
		 		 echo "<td>$value->firstname</td>";
		 		 echo "<td>$value->lastname</td>";
		 		 echo "<td>$value->gender</td>";
		 		 echo "<td>$value->qualification</td>";
		 		 echo "<td>$value->proffession</td>";
		 		 echo "<td>$value->status</td>";
		 		 echo "<td>$value->phone_number</td>";
		 		 echo "</tr>";
		 			
		 }

		  ?>
	</tbody>
</table>
