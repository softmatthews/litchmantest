 <?php
if(session_id() == '' || !isset($_SESSION)) {
 session_start();
}else{
	
} 


define('HOST','localhost');//database host
define('USER','root');//database username
define('PASS','');//database password
define('DB','postdigi_litchman');//database name
$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

?> 