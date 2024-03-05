<?php require 'header.php'; ?>
<link rel="stylesheet" href="../css/style1.css">

<main>
<div id="contact">
	<h2>お問い合わせ</h2>
    <ul class="contact-li">
        <li>弊社にご関心をお持ちいただき、ありがとうございます。サービスに関するご相談など、お気軽にお問い合わせください。</li>
        <li>お問合せ内容の確認後、担当者よりご連絡致します。下記よりお問い合わせになりたい項目をご選択ください。</li>
        <li>お問い合わせされる方は、お客様の情報がどのように取り扱われるのかを十分理解していただくために、プライバシーポリシーを必ずお読み頂き、同意の上でお問い合わせください。</li>
    </ul>
    </div>

    <div class="contact-form">
	<form method="" action="">
		<table>
			<tr><th>お名前<span>必須</span></th><td><input  type="text" name="name-con" placeholder="お名前(ニックネームでも可)" required></td></tr>
			<tr><th>メールアドレス<span>必須</span></th><td><input  type="email" name="mail-con"  placeholder="例:aaaa@bbb.jp"></td></tr>
			<tr>
				<th>お問い合わせ種類<span>必須</span></th>
				<td>
                    </style>
					<label><input  type="radio" name="kind" value="講座">講座</label>
					<label><input  type="radio" name="kind" value="講師">講師</label>
                </td>
			</tr>
			<tr><th>内容</th>
            <td><textarea class="comment" name="message" placeholder="お問い合わせの詳細を入力してください。"></textarea></td></tr>
		</table>
		<button type="submit" name="submit-button" class="contact-button">同意して送信する</button>
	</form>
</div>
</main>