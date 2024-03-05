<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_con = $_POST["name_con"];
    $mail_con = $_POST["mail_con"];
    $kind = $_POST["kind"];
    $message = $_POST["message"];
    $to = "#";
    $subject = "お問い合わせがありました";
    $body = "名前: $name_con\nメールアドレス: $mail_con\nお問い合わせ種類: $kind\n$message";
if (mail($to, $subject, $body)) {
  $message = "お問い合わせが送信されました。ありがとうございます！";
} else {
   $message = "エラーが発生しました。もう一度お試しください。";
    }
  } else {
      header("Location: contact.php");
  }
?>
<html>
  <head>
    <title>お問い合わせフォーム - 送信完了画面</title>
  </head>
  <body>
    <h1>お問い合わせフォーム - 送信完了画面</h1>
    <p><?php echo $message; ?></p>
    <p><a href="contact.php">お問い合わせフォームに戻る</a></p>
  </body>
</html>