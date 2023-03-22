<?php

require_once(__DIR__."/repository.php");


Class userrepository extends repository
{
    private const TABLE_NAME = "users";

    public function __construct(mysqli $connection)
    {
        parent::__construct($connection, self::TABLE_NAME);
    }

    public function get_by_id(int $userId) : array
    {
        $sqlSelect = $this -> connection -> prepare("SELECT * FROM ".self::TABLE_NAME. " WHERE Id = ?");
        $sqlSelect -> bind_param("i", $userId);
        $sqlSelect -> execute();
        $res = $sqlSelect -> get_result();
        if($res -> num_rows > 0){
            return $res -> fetch_assoc();     
        }
        else {
            return [];
        }
    }
}
?>