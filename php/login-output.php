<?php session_start(); ?>
<?php require '#'; ?>
<?php require '#'; ?>
<?php
unset($_SESSION['customer']);
$pdo=new PDO('mysql:host=localhost;dbname=academy_show;charset=utf8', 
	'staff', 'password');
$sql=$pdo->prepare('SELECT * FROM customer WHERE address=? AND password=?');
$sql->execute([$_REQUEST['address'], $_REQUEST['password']]);
foreach ($sql as $row) {
	$_SESSION['customer']=[
		'id'=>$row['id'], 'name'=>$row['name'], 
		'address'=>$row['address'], 'password'=>$row['password'],
		'phone_num'=>$row['phone_num'], 'payment'=>$row['payment']];
}
if (isset($_SESSION['customer'])) {
	echo 'HELLO!WORLD!', $_SESSION['customer']['name'], 'さん。';
} else {
	echo 'アドレスまたはパスワードが違います。';
}
?>
<?php require '#'; ?>
