<?php session_start(); ?>
<?php require '#'; ?>
<?php require '#'; ?>
<?php
if (isset($_SESSION['customer'])) {
	unset($_SESSION['customer']);
	echo 'ログアウトしました。';
} else {
	echo 'すでにログアウトしています。';
}
?>
<?php require '#'; ?>
