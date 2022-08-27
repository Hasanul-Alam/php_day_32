<?php


namespace App\classes;


abstract class Teacher
{
    public $a = 10;
    public $b = 50;

    public function add()
    {
        echo $this->a + $this->b;
    }

    public abstract function demo();
}