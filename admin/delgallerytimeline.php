<?php
session_start();
require('../config/connect.php');

if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
	header('location: login.php');
}

if(isset($_GET['id']) & !empty($_GET['id'])){
	$id = $_GET['id'];

	$delsql="DELETE FROM `gallerytimeline` WHERE id=$id";
	if(mysqli_query($connection, $delsql)){
		header("Location: gallerytimeline.php");
	}
}else{
	header('location: gallerytimeline.php');
}

?>