<?php
/*
This is the log file, use it statically where you want using LogModel::log("Your log text here")

@author Victor Béser
*/
class LogModel
{

    private static $log;
    public static function log($log)
    {
        // Define o fuso horário para São Paulo

        // Captura a data e hora atual
        $dataHoraAtual = new DateTime();

        // Formata a data e hora
        $dataHoraFormatada = $dataHoraAtual->format('Y-m-d H:i:s');

        self::$log = mb_strtoupper($log);

        DatabaseModel::connection("cgrs_internal");
        $pdo = DatabaseModel::pdo();

        $result = $pdo->prepare("INSERT INTO logs (log, date_created) VALUES (:log, :date)");
        $result->bindParam(":log", self::$log);
        $result->bindParam(":date", $dataHoraFormatada);
        
        try {
            $result->execute();
        } catch(PDOException $e) {
            echo "<script>console.log('Error: ', ".$e->getMessage().")</script>";exit();
        }

        DatabaseModel::closeConnection();

    }

}
