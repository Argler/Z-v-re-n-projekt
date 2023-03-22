<?php

require_once(__DIR__."/repository.php");
require_once(__DIR__."/../db/db.php");


class itemrepository extends repository
{
private const TABLE_NAME = "items";

public function __construct(mysqli $connection)
{
    parent::__construct($connection, self::TABLE_NAME);
}


public function get_all_items() : array
{
    $sql = $this -> connection -> prepare("SELECT * FROM ".self::TABLE_NAME." ORDER BY CreatedOn desc" );
    $sql -> execute();
    $res = $sql -> get_result();
    $result = array();
    if($res -> num_rows > 0)
    {
        while($row = $res -> fetch_assoc())
        {
            array_push($result, $row);
        }
    }
    else {
    }
    return $result;
}
}



?>