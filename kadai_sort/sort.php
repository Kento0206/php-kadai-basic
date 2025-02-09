<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
            $num = array(15, 4, 18, 23, 10);
            function sort_2way($array, $order){
                if($order === true){
            echo "昇順にソートします。<br>";
            asort($array);
            foreach($array as $array_num){
                echo "{$array_num}<br>";
            }
            }else{
            echo "降順にソートします。<br>";
            arsort($array);
            foreach($array as $array_num){
                echo "{$array_num}<br>";
            }
        }
    }
    sort_2way($num, true);
    sort_2way($num, false);
        ?>
    </p>
</body>
</html>
