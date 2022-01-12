<?php
session_start();
require('../config/connect.php');

if(!isset($_SESSION['manager']) & empty($_SESSION['manager'])){
	header('location: login.php');
}

if(isset($_GET['id']) & !empty($_GET['id'])){
	$id = $_GET['id'];

	$delsql="DELETE FROM `comments` WHERE id=$id";
	if(mysqli_query($connection, $delsql)){
		header("Location: comments.php");
	}
}else{
	header('location: comments.php');
}

?>