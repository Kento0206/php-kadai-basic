<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>PHP課題</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>社員情報入力フォーム</h2>
        <form action="confirm.php" method="POST">
            <table>
                <tr>
                    <td>社員名</td>
                    <td><input type="text" name="employee_name"></td>
                </tr>
                <tr>
                    <td>年齢</td>
                    <td><input type="text" name="employee_age"></td>
                </tr>
                <tr>
                    <td>所属部署</td>
                    <td>
                        <select name="department">
                            <option>開発部</option>
                            <option>営業部</option>
                            <option>人事部</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="送信"></td>
                </tr>
            </table>
        </form>
    </body>
</html>