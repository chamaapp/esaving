<?php
require("include/connection.php");
?>


<?php

if(isset($_POST['login_btn'])){
//formvariables
$fname=$_POST['fname'];	
$lname=$_POST['lname'];	
$password=$_POST['password'];


//uppercasestatements
$fname=ucfirst(mysqli_real_escape_string($conn,$_POST['fname']));
$lname=ucfirst(mysqli_real_escape_string($conn,$_POST['lname']));
$password=md5($_POST['password']);

//sqlstatements
$query="INSERT INTO register_tbl(firstname,lastname) VALUES('{$fname}','{$lname}')";

//connectsql
$result=mysqli_query($conn,$query);

header("Location:index.php");

}






if(isset($_POST['apply_btn'])){
//formvariables
$dateofreg=$_POST['dateofreg'];	
$dateofpaymt=$_POST['dateofpaymt'];	
$idno=$_POST['idno'];
$membrid=$_POST['membrid'];
$purpose=$_POST['purpose'];


//uppercasestatements
$dateofreg=ucfirst(mysqli_real_escape_string($conn,$_POST['dateofreg']));
$dateofpaymt=ucfirst(mysqli_real_escape_string($conn,$_POST['dateofpaymt']));
$idno=ucfirst(mysqli_real_escape_string($conn,$_POST['idno']));
$membrid=ucfirst(mysqli_real_escape_string($conn,$_POST['membrid']));
$purpose=ucfirst(mysqli_real_escape_string($conn,$_POST['purpose']));

//sqlstatements
$query="INSERT INTO loan_tbl(Memberid,Dateofapp,Dateofpayment,Idno,Phoneno,Loanpurpose) VALUES('{$dateofreg}','{$dateofpaymt}','{$idno}','{$membrid}','{$purpose}')";

//connectsql
$result=mysqli_query($conn,$query);

header("Location:apply.php");

}


?>



<!DOCTYPE html>
<html>
<head>
	<title>esaving</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-image: url(images/ke.jpg); vh: 800px;background-repeat: no-repeat;">
<div class="container">
	<div class=" row">
		<div class="col-md-12">
            
			    <h3 style="min-height:20px;">Member Login</h3>
			    <br><br>
	                  <form method="POST" action="index.php" name="guest_form" onsubmit="return validate()">
	                  <input type="text" name="fname" placeholder="firstname" class="form-control"/>
	                  <br><br>
	                  <input type="text" name="lname" placeholder="lastname" class="form-control"/>
	                  <br><br>
	                  <input type="password" name="password" placeholder="password" class="form-control"/>
                      <br><br>
	                  <input type="submit" name="login_btn" value="Login" class="btn btn-default" style="width:100%;"><span class="glyphicon glyphicon-lock"></span>
	                  <br><br>
	                  <input type="submit" name="check_btn" value="Check balance" class="btn btn-default" style="width:100%;"><span class="glyphicon glyphicon-envelope"></span>
	                  <br><br>
	                  <input type="submit" name="deposit_btn" value="Deposit" class="btn btn-default" style="width:100%;"><span class="glyphicon glyphicon-bank"></span>
	                  <br><br>
	                  <input type="submit" name="apply_btn" value="Apply loan" class="btn btn-default" style="width:100%;">
	                  
	                  <br><br>
	                 
                  </form>
		</div>
	</div>
</div>



<script>
	
function validate(){

var Fname=document.guest_form.fname.value;
var Lname=document.guest_form.lname.value;
var password=document.guest_form.password.value;
  if (Fname=="") {
  	alert('Please Enter First name');
  	return false;
  }

  if (Lname=="") {
  	alert('Please Enter Last name');
  	return false;
  }

  if (password=="") {
  	alert('Please Enter Password');
  	return false;
  }
return true;
}



</script>
<!-- scripts -->
<script src="js/jquery.3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>