<?php


namespace App\classes;
use App\classes\Database;


class Auth
{
    private $email;
    private $password;
    private $db;
    private $user;
    private $queryResult;
    private $sql;

    public function __construct($post = null)
    {
        if(isset($post['email']))
        {
            $this->email = $post['email'];
            $this->password = md5($post['password']);
        }
    }

    public function login()
    {
        $this->sql = "SELECT * FROM users WHERE  email = '$this->email' AND password = '$this->password' ";
        $this->db = new Database();
        $this->queryResult = mysqli_query($this->db->dbConnect(), $this->sql);
        $this->user = mysqli_fetch_assoc($this->queryResult);
        if($this->user)
        {
            session_start();
            $_SESSION['name'] = $this->user['name'];
            $_SESSION['id'] = $this->user['id'];

            header('Location: action.php?page=dashboard');
        }
        else
        {
            return 'Sorry..email or password is incorrect.';
        }
    }

    public function logout()
    {
        session_start();
        unset($_SESSION['name']);
        unset($_SESSION['id']);

        header('Location: action.php?page=login');
    }
}