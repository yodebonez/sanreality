<?php
session_start();
require('../config/connect.php');
 
if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
	header('location: login.php');
}
?>