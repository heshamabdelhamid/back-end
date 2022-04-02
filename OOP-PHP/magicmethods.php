<?php

class User
{
    
    public function __construct()
    {
    }
    
    public function __destruct()
    {
    }
    // property overloading

    /**
        __set() is run when writing data to inaccessible (protected or private) or non-existing properties.
        __get() is utilized for reading data from inaccessible (protected or private) or non-existing properties.
        __isset() is triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties.
        __unset() is invoked when unset() is used on inaccessible (protected or private) or non-existing properties.
     */

    public function __set($property, $value)
    {
        echo 'this ' . $property . ' not found & not found this value' . $value;
    }

    public function __get($property)
    {
        echo 'this ' . $property . ' not found';

    }

    public function __isset($property)
    {
    }

    public function __unset($property)
    {
    }

    // methodes overloading

    public function __call($name, $arguments)
    {
        
    }

}

$user = new User();

$user->name;