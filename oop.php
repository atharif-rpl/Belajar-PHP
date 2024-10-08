<?php
class Animals
{
    public string $name;
    public string $color;
    protected int $age; // hanya bisa diakses di dalam class
    private int $weight; // ga bisa diakses di dalam / luar class

    // Constructor = selalu dijalankan
    public function __construct()
    {
        $this->weight = 12;
        echo "Hello, I'm Initialized \n";
    }

    public function intro()
    {
        echo "Hello, This is intro function from Class Animals";
    }

    public function setAge()
    {
        $this->age = 12;
        echo $this->age;
    }

    public function jump()
    {
        echo "I'm jumping";
    }

    public function sound(string $type)
    {
        echo "I'm {$type}";
    }

    public function getName()
    {
        echo $this->name;
    }
}

// Inheritance
class Dog extends Animals
{
    public function message()
    {
        echo "\nHello World";
    }

    // Override = menimpa function intro pada parent
    public function intro()
    {
        echo "This is from Dog class";
    }
}

$parent = new Animals();
$parent->intro();

$new = new Dog();
$new->intro();

// $dog = new Animals(); // object instance

// $dog->name = "Bulldog";
// $dog->color = "Brown";
// // $dog->age = 12; // error
// // $dog->weight = 12;


// $cat = new Animals();
// $cat->name = "Persia";
// $cat->color = "Orange";


// // var_dump($dog);
// // $dog->jump();
// $dog->getName();
// echo "\n"; // new line
// $dog->sound("Barking");

// echo "\n"; // new line

// // var_dump($cat);
// // $cat->jump();
// $cat->getName();
// echo "\n"; // new line
// $cat->sound("Meongg");
