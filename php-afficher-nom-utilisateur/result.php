<?php
session_start();
if(isset($_POST['valider'])){	
		$_SESSION['user'] = $_POST['user'];
		header("location:login.php");
}
?>
