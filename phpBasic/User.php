<?php
abstract class User
{
    public $name;

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}

interface Vip
{
    public function vip($level);
}

class VipUser extends User implements Vip
{
    public function setName($name)
    {
        return parent::setName($name);
    }

    public function vip($level)
    {
        $this->name .= ' '.$level.' ';
    }
}

$VIPUSER = new VipUser();
$VIPUSER->setName('steven');
$VIPUSER->vip('Vip 1');
print_r($VIPUSER->getName());