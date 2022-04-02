
A Trait is similar to a class, 
but only intended to group functionality in a fine-grained and consistent way.
It is not possible to instantiate a Trait on its own.
It is an addition to traditional inheritance and enables horizontal composition of behavior; that is,
the application of class members without requiring inheritance.

<?php

trait featuer1
{
    public function Featuer()
    {
        echo 'hello featuer 1';
    }
}
trait featuer2
{
    public function Featuer()
    {
        echo 'hello featuer 2';
    }
}

class User
{
    use featuer1,featuer2 {
        featuer1::Featuer insteadof featuer2;
        featuer2::Featuer as feet;
    }
}

$user = new User;

var_dump($user->Featuer());
var_dump($user->feet());
