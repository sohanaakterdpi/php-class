<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

class Fruit{
    public $name ;
    public $color ;

    function get_fruit_name(){
        return $this->name;
    }
    function set_fruit_name($x){
        $this->name = $x;
    }

    function get_fruit_color(){
        return $this->color;
    }
    function set_fruit_color($x){
        $this->color = $x;
    }
}
$apple = new Fruit();
$mango = new Fruit();
$banana = new Fruit();
$jackfruit = new Fruit();

$apple->set_fruit_name("apple");
$apple->set_fruit_color("black");

$mango->set_fruit_name("mango");
$mango->set_fruit_color("green");

$banana->set_fruit_name("banana");
$banana->set_fruit_color("yello");

$jackfruit->set_fruit_name("jackfruit");
$jackfruit->set_fruit_color("green");

echo $apple->get_fruit_name() ." ";
echo $apple->get_fruit_color();
echo "<br>";

echo $mango->get_fruit_name() ." ";
echo $mango->get_fruit_color();
echo "<br>";

echo $banana->get_fruit_name() ." ";
echo $banana->get_fruit_color();
echo "<br>";

echo $jackfruit->get_fruit_name() ." ";
echo $jackfruit->get_fruit_color();
echo "<br>";

    ?>
</body>
</html>