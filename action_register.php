<?php 
session_start();
include_once("connection.php");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$name=$fname." ".$lname;
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['pswd'];
$password2=md5($password);

$user = $_POST['email'];
	$password = $_POST['pswd'];
	echo $password;
	$password2 = md5($password);
	
	$sql = "SELECT * FROM users WHERE email='$user' ";
//	echo $sql;
	$result = mysqli_query($conn,$sql);
	$users=0;
	$theuser;
	//echo count($result);
	while($row = mysqli_fetch_assoc($result)){
	  $users=count($row); 
	  $theuser=$row;
	  //echo $theuser['fname'];
	}
	//print_r($theuser);
	 
	if($users >=1){
		//header("Location: register.php?r=1");
		echo "<script type='text/javascript'>window.top.location='register.php?r=1';</script>"; exit;

	}else{
$sql= "INSERT INTO users(fname,lname,phone,email,pswd,role) VALUES ('$fname','$lname','$phone','$email','$password2','$role')";

if ($conn->query($sql) === TRUE) {
  //echo " record created successfully";
	header("Location: login.php?r=2");
	echo "<script type='text/javascript'>window.top.location='login.php?r=1';</script>"; exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  header("Location: register.php?r=3");
  echo "<script type='text/javascript'>window.top.location='register.php?r=3';</script>"; exit;
}
	}

$conn->close();
?>