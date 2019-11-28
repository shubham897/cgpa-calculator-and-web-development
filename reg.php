<?php
  $conn = new mysqli('localhost','root','','sgpa');
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  if(isset($_POST['save'])){
  $name = $_POST['name'];
  $mob = $_POST['mob'];

  $query = "INSERT INTO user (name,mob) VALUES ('$name','$mob')";
  $run = mysqli_query($conn,$query);

  if($run){
    echo "<script>alert('Saved Data');</script>";
  }else{
    echo "<script>alert('Something Wrong!');</script>";
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="name">
		<input type="number" name="mob">
		<input type="submit" name="save">
	</form>
</body>
</html>