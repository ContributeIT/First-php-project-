<?php

class Nguoi {
    public $name;
    protected $salary;
    public $_age;

    public function getName(){
        return $this->name;
    }

    protected function getSalary(){
        return $this->salary;
    }

    private function getAge(){

    }

    public function setAge()
    {
        return $this->_age;
    }

}

class Gamer extends Nguoi implements PlayGame
{
    public function playingGame()
    {
        $this->_age += 100;
    }

    public function sleep()
    {
        echo "".$this->_age;
    }
}

$gamer = new Gamer();
$gamer->setAge(10);
$gamer->playingGame();

interface PlayGame{
    public function playingGame();
    public  function  sleep();
}

$human = new Nguoi();
$human->getName();
//$human->getSalary(); //failed because it must be called in child

class Descendant extends Nguoi{
    public function getDadSalary(){
        echo 'luong bo tao la: '.$this->getSalary();
    }

    public static function NameAgeStt(){
        echo 'ten tuoi stt cua hai: '.self::$sttAge.' '.self::$sttName;
    }
}

$decendant = new Descendant();
$decendant->getDadSalary();

//static
$decendant::NameAgeStt();
