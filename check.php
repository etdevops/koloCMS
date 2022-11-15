<?php
session_start();

if (!isset($_SESSION['login'])){
        header('location: index.php');
        die();
}

if ($_SESSION['privilege'] === "dev1"){
	header("location:/dev/");
	exit();
}else{
	// user is admin
	header("location:/admin/");
	exit();

}
?>
