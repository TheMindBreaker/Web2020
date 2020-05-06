<?php

class Database
{

  public $conn;

    public function dbConnection($host,$user,$password,$name)
	{

	    $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $host . ";dbname=" . $name, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
            $this->conn->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
        }
		catch(PDOException $exception)
		{
            echo "Error con el servidor, no fue posible contactar al servidor CONSTRUTECMX";
        }

        return $this->conn;
    }


}
