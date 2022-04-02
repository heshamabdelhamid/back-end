<?php

class Database extends DatabaseHandler
{
    //prorerties
    protected $handler;

    //methods 
    public function handel($handler)
    {
        return $this->handler = $handler;
    }
}
