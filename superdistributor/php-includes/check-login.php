<?php
session_start();
if(isset($_SESSION['id']) && $_SESSION['login_type']=='user'){
}
else{
	echo '<script>alert("Access Denied");windows.location.assign("index.php");</script>';
}
?>