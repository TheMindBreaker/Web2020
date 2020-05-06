<?php
require_once 'dbcon.php';
error_reporting(E_ALL);
ini_set('display_errors', 'On');

define ("DB_HOST","construtec.xyz");
define ("DB_USER","dawpar2");
define ("DB_PASSWORD","Ia26h&7q");
define ("DB_NAME","dawpar2");

//allUse Variab

class baseCon{
    private $conn;
    public function __construct(){
        $database = new Database();
        $db = $database->dbConnection(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        $this->conn = $db;
    }
    public function runQuery($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }

    public function pdoInsert($tableName, $data){


        $string = "INSERT  INTO ".$tableName." (";
        $string .= implode(",", array_keys($data)) . ') VALUES (';
        $string .= "'" . implode("','", array_values($data)) . "')";
        $stmt = $this->conn->prepare($string);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

}


?>
