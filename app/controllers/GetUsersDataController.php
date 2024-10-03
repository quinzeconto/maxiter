<?php
require __DIR__ . "/../models/LoadModel.php";
require __DIR__ . "/../models/SecureRequestModel.php";


class GetUsersDataController {

    public function get() {
        
        // Your code here
        $result = DatabaseModel::connection("maxiter")->execute("SELECT * FROM users");
        $compactData = [];
        while($resultFetch = $result->fetch(PDO::FETCH_ASSOC)) {
            $compactData[] = $resultFetch;
        }
        
        ResponseModel::json( true, $compactData);

    }

}

$controller = new GetUsersDataController();
$controller->get();