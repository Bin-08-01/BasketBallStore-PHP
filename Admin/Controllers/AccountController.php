<?php
require_once "./Models/account.php";

class AccountController{
    public account $accModel;

    public function __construct()
    {
        $this->accModel = new account();
    }

    public function getAll(): void
    {
        $accountList = $this->accModel->getAllAccount();
        require_once "view/index.php";
    }

    public function handleAdd():void
    {
        $fn = $_POST['first_name'];
        $ln = $_POST['last_name'];
        $p = $_POST['phone'];
        $g = $_POST['gender'];
        $e = $_POST['email'];
        $address =$_POST['address'];
        $un = $_POST['username'];
        $pw = md5($_POST['password']);
        $idAuth = $_POST['id_auth'];
        $this->accModel->add($fn, $ln, $p, $g, $e, $address, $un, $pw, $idAuth);
    }

    public function handleDelete(): void
    {
        $id = $_GET['id'];
        $this->accModel->delete($id);
    }
}