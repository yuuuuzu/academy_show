<?php session_start(); ?>
<?php require '#'; ?>
<?php require '#'; ?>
<?php
$pdo = new PDO(
	'mysql:host=localhost;dbname=academy_show;charset=utf8',
	'staff',
	'password'
);

$sql = $pdo->prepare('SELECT * FROM customer WHERE address=?');
$sql->execute([$_REQUEST['address']]);

if (empty($sql->fetchAll())) {
	$sql = $pdo->prepare('insert into customer values(null,?,?,?,?,?)');
	$sql->execute([
		$_REQUEST['name'], $_REQUEST['address'],
		$_REQUEST['password'], $_REQUEST['phone_num'], $_REQUEST['payment']
	]);
	echo 'お客様情報を登録しました。';
} else {
	echo 'アドレスがすでに使用されていますので、変更してください。';
}
?>
<?php require '#'; ?>
