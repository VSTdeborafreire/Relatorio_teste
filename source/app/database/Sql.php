<?php

namespace Source\app\database;
require_once __DIR__ . "/../../../vendor/autoload.php";

class Sql
{
    private $conn;

    public function __construct()
    {
        $this->conn = new \PDO(
            "mysql:dbname=".BD_NAME.";host=".BD_HOST,
            BD_USERNAME,
            BD_PASSWORD
        );
    }

    private function setParams($statement, $parameters = array())
    {
        foreach($parameters as $key => $value)
        {
            $this->bindParam($statement, $key, $value);
        }
    }

    private function bindParam($statement, $key, $value)
    {
        $statement->bindParam($key, $value);
    }

    public function select($rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function query($rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        if($stmt)
        {
            return true;
        }else
        {
            return false;
        }
    }
}