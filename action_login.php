<?php
session_start();
require_once('connection.php');

	$user = $_POST['email'];
	$password = $_POST['pswd'];
	//echo $password;
	$password2 = md5($password);
	
	$sql = "SELECT * FROM users WHERE email='$user' AND pswd='$password2'";
//	echo $sql;
	$result = mysqli_query($conn,$sql);
	$users=0;
	$theuser;
	//echo count($result);
	while($row = mysqli_fetch_assoc($result)){
	  $users=count($row); 
	  $theuser=$row;
	 // echo $theuser['fname'];
	}
	//print_r($theuser);
	 
	if($users >=1){
		//print("Exist");
		$_SESSION["user"]=$theuser['id'];
		$_SESSION["fname"]=$theuser['fname'];
		$_SESSION['LOGGEDUSER']=$theuser;
		
	//	echo $_SESSION['user'];
		//header("Location: https://postdigitalafrica.com/litchman/index.php");
		echo "<script type='text/javascript'>window.top.location='dash/index.php';</script>"; exit;
		exit;
		} else{
// 			print("Non");
// 			header("Location: register.php");
echo "<script type='text/javascript'>window.top.location='login.php?r=3';</script>"; exit;
		}
		mysqli_close($con);
?>