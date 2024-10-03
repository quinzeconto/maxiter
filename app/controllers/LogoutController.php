<?php
require __DIR__ . "/../models/LoadModel.php";
require __DIR__ . "/../models/SecureRequestModel.php";
class LogoutController
{

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        ResponseModel::json(true, "Logout!");


    }

}

$logoutController = new LogoutController();
$logoutController->logout();