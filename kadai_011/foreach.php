<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>foreach</title>
</head>
<body>
    <p>
        <?php
            $info = ["名前" => "玉ねぎ", "値段" => 200, "産地" => "北海道"];
            foreach($info as $key => $value){
                echo "{$key}:{$value}<br>";
            }
        ?>
    </p>
</body>
</html>
