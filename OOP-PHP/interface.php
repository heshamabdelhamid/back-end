<?php 


interface User
{

    public function FunctionName($var = null);

}


class Admin implements User
{

    public function FunctionName($var = null)
    {

    }

}