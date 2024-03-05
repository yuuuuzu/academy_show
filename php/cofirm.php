<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name_con = $_POST["name_con"];
    $mail_con = $_POST["mail_con"];
    $kind = $_POST["kind"];
    $message = $_POST["message"]; 
} else { 
    header("Location: contact.php"); 
} 
?>
<html>
    <head>
     <title>お問い合わせフォーム - 確認画面</title>
    </head>
    <body>
        <h1>お問い合わせフォーム - 確認画面</h1>
        <p>以下の内容で送信します。よろしいですか？</p>
        <table>
            <tr><td>名前：</td><td><?php print (htmlspecialchars($_POST['name_con'], ENT_QUOTES, 'UTF-8')); ?></td></tr>
            <tr><td>メールアドレス：</td><td><?php print (htmlspecialchars($_POST['mail_con'], ENT_QUOTES, 'UTF-8')); ?></td></tr>
            <tr><td>お問い合わせ種類：</td><td><?php print (htmlspecialchars($_POST['kind'], ENT_QUOTES, 'UTF-8')); ?></td></tr>
            <tr><td>内容：</td><td><?php print (htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8')); ?></td></tr>
        </table>
        <form method="post" action="send.php">
            <input type="hidden" name="name_con" value="<?php echo $name_con; ?>">
            <input type="hidden" name="email_con" value="<?php echo $email_con; ?>">
            <input type="hidden" name="tmessage" value="<?php echo $message; ?>">
            <input type="submit" value="送信">
            <button type="button" onclick="history.back()">戻る</button>
        </form>
    </body>
</html>