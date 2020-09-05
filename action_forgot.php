<?php
session_start();
require_once('connection.php');

	$user = $_POST['email'];
	$password = $_POST['pswd'];
	//echo $password;
	if($password=="none"){
		$sql = "SELECT * FROM users WHERE email='$user' ";
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
//	print_r($theuser);
	 
	if($users >=1){
		//print("Exist");
		// $_SESSION["user"]=$theuser['id'];
		// $_SESSION["fname"]=$theuser['fname'];
		$_SESSION['fLOGGEDUSER']=$theuser;
		
		echo $_SESSION['user'];
		// header("Location: index.php");
		echo "<script type='text/javascript'>window.top.location='forgot.php?r=3';</script>"; exit;
        
		} else{
			//print("Non");
			// header("Location: register.php");
			echo "<script type='text/javascript'>window.top.location='forgot.php?r=2';</script>"; exit;
		}

	}else{
$password2 = md5($password);
$changeuser=$_SESSION['fLOGGEDUSER'];
$id=$changeuser['id'];
$sql1="UPDATE users SET pswd='$password2' WHERE id='$id' ";
if(mysqli_query($conn,$sql1)){
	echo "<script type='text/javascript'>window.top.location='login.php?r=2';</script>"; exit;
}else{
echo "<script type='text/javascript'>window.top.location='forgot.php?r=4';</script>"; exit;
}
	}
	
	
	
		mysqli_close($con);

?>