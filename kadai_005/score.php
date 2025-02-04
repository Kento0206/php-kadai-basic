<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>平均点の算出</title>
    </head>
    <body>
        <p>
            <?php
                $score1 = 80;
                $score2 = 60;
                $score3 = 55;
                $score4 = 40;
                $score5 = 100;
                $score6 = 25;
                $score7 = 80;
                $score8 = 95;
                $score9 = 30;
                $score10 = 60;
                // スコアの合計
                $score_total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
                // スコアの平均
                $score_average = $score_total / 10;
                // スコアの平均を出力
                echo $score_average;
            ?>
        </p>

</body>
</html>