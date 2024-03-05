<?php require 'header.php' ?>
<link rel="stylesheet" href="css/style1.css">

<main>
    <div id="lesson">
        <h2>LESSON</h2>
        <form action="" method="POST">
            <table>
                <tr>
                    <th>lesson id</th>
                    <td><input type="hidden" name="id"></td>
                </tr>
                <tr>
                    <th>日にち</th>
                    <td><input type="date" name="name-lss"></td>
                </tr>
                <tr>
                    <th>時間</th>
                    <td><input type="time" name="time-lss"></td>
                </tr>
                <tr>
                    <th>講座名</th>
                    <td><input type="text" name="text-lss"></td>
                </tr>
                <tr>
                    <th>講師名</th>
                    <td><input type="number" name="num-lss"></td>
                </tr>
                <tr>
                    <th>URL</th>
                    <td><input type="url" name="url-lss"></td>
                </tr>
            </table>
        </form>
    </div>
</main>
<?php require 'footer.php' ?>