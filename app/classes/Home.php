<?php


namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Student;


class Home extends User implements ExampleOne, ExampleTwo
{
    use Student;

    public $x = 10;
    protected $y = 20;
    private $z = 30;
    public $home;

    public function __construct()
    {

    }

    public function index()
    {
        header('Location: action.php?page=login');
        /*$this->userName = 'SEIP';
        echo $this->userName;*/
    }

    protected function create()
    {
        echo 'in create';
    }

    private function manage()
    {
        echo 'in manage';
    }

    public function one()
    {
        // TODO: Implement one() method.
    }

    public function two()
    {
        // TODO: Implement two() method.
    }

    public function three()
    {
        // TODO: Implement three() method.
    }

    public function five()
    {
        // TODO: Implement five() method.
    }

    public function six()
    {
        // TODO: Implement six() method.
    }

    public function seven()
    {
        // TODO: Implement seven() method.
    }

    public function eight()
    {
        // TODO: Implement eight() method.
    }

    public function demo()
    {
        // TODO: Implement demo() method.
    }
}