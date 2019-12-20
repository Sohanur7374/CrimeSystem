<?php
session_start();

$_SESSION = array();

session_destroy();
if(!isset($_SESSION['username'])){
	header('location:home.php');
}
?>