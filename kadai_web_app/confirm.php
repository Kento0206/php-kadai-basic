<?php

    $name = $_POST['employee_name'];
    $age = $_POST['employee_age'];
    $department = $_POST['department'];

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>確認画面</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>入力内容をご確認ください</h2>
        <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックして下さい。</p>
        <table border="1">
            <tr>
                <th>項目</th>
                <th>入力内容</th>
            </tr>
            <tr>
                <td>社員名</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>年齢</td>
                <td><?php echo $age; ?></td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td><?php echo $department; ?></td>
            </tr>
        </table>
        <p>
            <button value="確定" onclick="location.href='complete.php'">確定</button>
            <button value="キャンセル" onclick="history.back()">キャンセル</button>
        </p>
    </body>
</html>

