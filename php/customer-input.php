<?php session_start(); ?>
<?php require '#'; ?>
<?php require '#'; ?>
<?php
$name=$address=$login=$password=$phone_num=$payment='';
if (isset($_SESSION['customer'])) {
	$name=$_SESSION['customer']['name'];
	$address=$_SESSION['customer']['address'];
	$password=$_SESSION['customer']['password'];
	$phone_num=$_SESSION['customer']['phone_num'];
	$payment=$_SESSION['customer']['payment'];
}
?>
<?php require '#'; ?>
