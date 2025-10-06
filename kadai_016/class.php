<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        class Food {
            private $name;
            private $price;
            public function __construct($name, $price){
                $this->name = $name;
                $this->price = $price;
            }
            public function show_price (){
                return $this->price;
            }
        }

        class Animal {
            private $name;
            private $height;
            private $weight;
            public function __construct($name, $height, $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            public function show_height (){
                return $this->height;
            }
        }

        $apple = new Food ('Apple', 100);
        $cat = new Animal ('Cat', 50, 4);

        print_r($apple);
        echo '<br>';
        print_r($cat);
        echo '<br>';
        echo $apple->show_price();
        echo '<br>';
        echo $cat->show_height();
        
        ?>
    </p>


</body>

</html>