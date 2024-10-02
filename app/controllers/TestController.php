<?php
require __DIR__ . "/../models/LoadModel.php";
require __DIR__ . "/../models/SecureRequestModel.php";

class TestController {

    public function test() {

        // $id = 11;
        // $result = DatabaseModel::connection("cgrs_internal")->execute("SELECT * FROM systems WHERE id = :id", [
        //     ":id" => $id
        // ]);
        // $res = $result->fetch(PDO::FETCH_ASSOC);

        $res = EnvModel::env("APP_NAME");
        ResponseModel::json(true, $res);

    }

}

$controller = new TestController();
$controller->test();