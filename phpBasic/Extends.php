<?php
abstract class Animal{
}

interface Action{
    public function Speak();
}
class Human extends Animal implements Action{
    public $name;
    public $salary;
    public $age;
    public $weight;

    public function Speak(){
        echo "I am a coder". "\n";
    }

}

class Cat extends Animal implements Action{
    public $weight;
    public $age;
    public function Speak(){
        echo "Meow meow"." "."\n";
    }
}

class Dog extends Animal implements Action{
    public $weight;
    public $age;
    public function Speak()
    {
        echo "Go go"." "."\n";
    }
}



