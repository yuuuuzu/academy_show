<?php
$pdo = new PDO('mysql:host=localhost;dbname=academy_show;charset=utf8', 'staff', 'password'); {
    $sqlsc = $pdo->prepare('SELECT * FROM customer WHERE address=?');
    $sqlsc->execute($_POST['address']);
}
