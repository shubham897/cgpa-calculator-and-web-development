<?php
  $conn = new mysqli('localhost','root','','sgpa');
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  if(isset($_POST['insert'])){
  $scode = $_POST['scode'];
  $sname = $_POST['sname'];
  $scrd = $_POST['scrd'];
  $sgrade = $_POST['sgrade'];
  echo "hello";


  $query = "INSERT INTO student (sc,sn,cr,gd) VALUES ('$scode','$sname','$scrd','$sgrade')";
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
	<title></title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="wtproject.css">
  
</head>  
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="#"><img id="logo" src="logo.png" alt="logo"></a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#collapsemenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsemenu">
			<div class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
				<li class="nav-item"><a class="nav-link" href="#">CALCULATOR</a></li>
				
			</div>
			<div class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="team.html">TEAM</a></li>
				<li class="nav-item"><a class="nav-link" href="contact.html">CONTACT US</a></li>
			
			</div>
		</div>
		
	</nav>
	<br>
</br>

	<div class="container">
		<div class="col-sm-12" style="background-color:green; height: 50px; text-align: center; margin-top: auto; color: white;"><h1>RESULT DATABASE</h1></div>
		<br>
	
	<form action="" class="detail" method="POST">
 <!-- Name:  
      <input type="text" name="firstName"><br></br>
  Roll Number:
  <input type="number" name="rollNumber"><br>
  <br>
  Date of birth:
  <input type="Date"><br><br>
  Gender:<br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br><br>
  Branch:
  <select>
  <option value="IT">IT</option>
  <option value="MECHANICAL">MECHANICAL</option>
  <option value="CSE">CSE</option>
  <option value="ELECTRICAL">ELECTRICAL</option>
  <option value="CHEMICAL">CHEMICAL</option>
  <option value="PRODUCTION">PRODUCTION</option>
  <option value="MINING">MINING</option>
  <option value="METALLURGY">METALLURGY</option>
  <option value="ECE">ECE</option>
  <option value="CIVIL">CIVIL</option>


</select>
  Semester:
  <select>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
</select>

<br>-->

<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-3"><h2>SUBJECT CODE</h2></div>
			<div class="col-md-1"></div>
			<div class="col-md-3"><h2>SUBJECT NAME</h2></div>
			<div class="col-md-1"></div>
			<div class="col-md-2"><h2>CREDIT</h2></div>
			<div class="col-md-2"><h2>GRADE</h2></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3">Sub1: <input type="text" name="scode" required></div>
			<div class="col-md-1"></div>
			<div class="col-md-3"><input type="text" name="sname" required></div>
			<div class="col-md-1"></div>
			<div class="col-md-2">
        <select name="scrd">
  				<option value="0">0</option>
  				<option value="1">1</option>
  				<option value="2">2</option>
  				<option value="3">3</option>
  				<option value="4">4</option></select>
  		</div>
			<div class="col-md-2">
        <select name="sgrade">
  				<option value="10">A+</option>
  				<option value="9">A</option>
  				<option value="8">B+</option>
  				<option value="7">B</option>
  				<option value="6">C+</option>
  				<option value="5">C</option>
  				<option value="4">D+</option>
  				<option value="3">D</option>
  				<option value="2">E+</option>
  				<option value="1">E</option>
  				<option value="0">F</option>
  			</select>
  		</div>
		</div>
	</div>

<input type="submit" name="insert">
</form>

<button  class="btn btn-danger text-align: center"><a href="data.php">SHOW</a></button>


  </div>
<br>



</br>
<section class="sec2"> <div class="container">

      <div class="row pt-5">
        <div class="col">
          <div class="d-flex justify-content-center">
            <div>
              <img src="logo.png" width="200px" height="200px" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
      
      <div class="row pt-5">
        <div class="col-sm-12">
          <div class="d-flex justify-content-center">
            <ul class="list-unstyled">
              <li class="d-inline-block px-3">
                <a href="index.php" class="small font-weight-bold footer_nav">HOME</a>
              </li>
              <li class="d-inline-block px-3">
                <a href="sgpa.php" class="small font-weight-bold footer_nav" >CALCULATOR</a>
              </li>
             
              <li class="d-inline-block px-3">
                <a href="team.html" class="small font-weight-bold footer_nav" >TEAM</a>
              </li>
              <li class="d-inline-block px-3">
                <a href="contact.html" class="small font-weight-bold footer_nav" >CONTACT US</a>
              </li>
             
            </ul>
          </div>
        </div>
      </div>
</div></section>
</body>
</html>