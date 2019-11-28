<?php
  $conn = new mysqli('localhost','root','','sgpa');
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 $query = "SELECT * FROM student;";
  $run = mysqli_query($conn,$query);
  $row = mysqli_fetch_array($run,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>Subject Code</th>
			<th>Subject Name</th>
			<th>Credit</th>
			<th>Grade</th>
			<th>Cr*Gd</th>
		</tr>
		<tr>
			<td><input type="text" name="scode" value="<?php echo $row['sc'] ?>"></td>
			<td><input type="text" name="sname" value=></td>
			<td><input type="text" name="cred" value=></td>
			<td><input type="text" name="scode" value=></td>
			<td><input type="text" name="scode" value=></td>
		</tr>
	</table>

</body>
</html>