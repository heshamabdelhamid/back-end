<?php

class User
{
    // Properties 

    public static $user_name = 'ahmed';
    public $name = 'hesham';
    public $age  = 20;

    //methodes 

    public function setName()
    {
        return $this->name;
    }

    public function setAge()
    {
        return $this->age;
    }

    public static function setUserName()
    {
        return self::$user_name;
    }
    
}
