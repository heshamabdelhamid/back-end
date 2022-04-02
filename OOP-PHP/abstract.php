<?php

/**
 * PHP has abstract classes and methods. 
 * Classes defined as abstract cannot be instantiated,
 * and any class that contains at least one abstract method must also be abstract.
 * Methods defined as abstract simply declare the method's signature; they cannot define the implementation.
 * abstract methodes contains no body code.
 * can have abstract methodes and non abstract methodes. 
 * when you inhenit the abstract class you must use the abstract methodes in the child class.
 * abstract methodes can be use parameter.
 * visibility marker must be same the level or down not up level. 
 * say private can be private & protected & public.
 * say protected can be protected & public cannot private.
 * say public can be only public cannot protected & private .
 */

abstract class DatabaseHandler 

{
    
    abstract public function handel($handler);

    public function FunctionName()
    {
        # code...
    }

}


class User extends DatabaseHandler
{

    public function handel($handler)
    {
        //... code 
    }

}

