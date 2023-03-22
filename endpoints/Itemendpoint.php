<?php

require_once(__DIR__."/../dal/itemrepository.php");

if(isset($_POST["operation_type"]))
{   
        $itemRepo = new itemrepository($connection);
        if($_POST["operation_type"] == "create")
        {
            if(isset($_POST["Content"])){
                $input = array("Content" => $_POST["Content"], "CreatedOn" => $_POST["CreatedOn"],"UserId" => $_POST["UserId"]);
                echo $itemRepo -> create($input);
            }
        }
        else if($_POST["operation_type"] == "delete")
        {
            if(isset($_POST["Id"]))
            {
                $deleteCondition = "Id =".$_POST["Id"];
                $itemRepo -> delete($deleteCondition);
            }
        }

}


?>