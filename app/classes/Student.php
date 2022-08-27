<?php


namespace App\classes;


trait Student
{
    public $name = 'Nishat';
    public $email = 'nisat.affifa@gmail.com';
    public $mobile = '01797888924';

    public function test()
    {
        echo $this->name;
    }
}