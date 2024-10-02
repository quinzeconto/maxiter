<?php

class ResponseModel {

    private static $status;
    private static $data;

    public static function json($status, $data) {
        self::$status = $status;
        self::$data = $data;

        echo json_encode([
            "status" => self::$status,
            "data" => self::$data,
        ]);exit();


    }

}