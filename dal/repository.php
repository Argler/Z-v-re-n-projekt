<?php

require_once(__DIR__."/Irepository.php");

class repository implements Irepository
{
    protected mysqli $connection;
    private string $tableName;
    
    public function __construct(mysqli $conn, string $tbName)
    {
        $this -> tableName = $tbName;

        $this -> connection = $conn;

        if($this -> connection -> connect_error)
        {
            die ("Připojení selhalo: ". $this -> connection -> connect_error);
        }
        return $this -> connection -> insert_id;
    }

    public function create(array $fieldsAndValues) : int
    {
        $sql = "INSERT INTO ".$this -> tableName."(".implode(',', array_keys($fieldsAndValues)).")VALUES('".implode('\',\'', array_values($fieldsAndValues))."');";
        $sql = self::prepare_query($sql);
        if(!self::run_query($sql)){
            throw new Exception("Přidání nové položky selhalo");
        }
        return $this -> connection -> insert_id;
    }


    public function delete(string $condition) : void
    {
        $sql = "DELETE FROM ".$this -> tableName." WHERE $condition;";
        if(!self::run_query($sql)){
            throw new Exception("Smazání položky selhalo");
        }
    }

    public function prepare_query(string $sql) : string
    {
        $sql = str_replace("'false'", "false", $sql);
        $sql = str_replace("'true'", "true", $sql);
        $sql = str_replace("'NULL'", "NULL", $sql);
        $sql = str_replace("'null'", "null", $sql);
        return $sql;
    }

    private function run_query(string $sql)
    {
        return $this -> connection -> query($sql);
    }
}   
?>