<?php


namespace App\classes;


class User
{
    public $userName = 'BITM';
    protected $password = '54321';
    private $accessLabel = 'admin';

    public function login()
    {
        echo 'in login';
    }

    protected function logout()
    {
        echo 'in logout';
    }

    private function changePassword()
    {
        echo 'in change password.';
    }
}