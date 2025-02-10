<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>kadai_016</title>
        <meta charset="utf-8">
</head>
<body>
    <p>
        <?php
            // foodクラスの定義
            class Food{
                private $name;
                private $price;

                // 名前と値段のコンストラクタの定義
                public function __construct(string $name, int $price){
                    $this->name = $name;
                    $this->price = $price;
                }
                // priceプロパティの出力メソッド
                public function show_price(){
                    echo $this->price . "<br>";
                }
            }

            // animalクラスの定義
            class Animal{
                private $name;
                private $height;
                private $weight;
                
                public function __construct(string $name, int $height, int $weight){
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }

                // heightプロパティの出力メソッド
                public function show_height(){
                    echo $this->height . "<br>";
                }
            }

            //　Foodクラスのインスタンス化
            $food = new Food('potato', 250);
            // foodクラスの出力
            print_r($food);
            echo "<br>";

            $animal = new Animal('dog', 60, 5000);
            print_r($animal);
            echo "<br>";

            // priceメソッドの出力
            $food->show_price();
            // heightメソッドの出力
            $animal->show_height();

        ?>
    </p>
</body>
</html>