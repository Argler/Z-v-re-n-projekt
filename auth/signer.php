<?php

require_once(__DIR__."/isigner.php");
require_once(__DIR__."/crypt.php");

class signer implements isigner{

    private mysqli $connection;
    private const TABLE_NAME = "users";
    private crypt $crypt;

    public function __construct(mysqli $conn)
    {
        $this -> connection = $conn;
        $this -> crypt = new crypt();
    }

public function add_user(string $firstname, string $surname, string $email, string $password, string $passwordCon) : void
{
    if($password === $passwordCon)
    {
        $enc_password = $this -> crypt -> encrypt($password);
        $sql = "INSERT INTO ".self::TABLE_NAME."(Firstname, Surname, Email, Password)VALUES('$firstname', '$surname', '$email', '$enc_password')";
        if(!$this -> connection -> query($sql))
        {
            throw new Exception("Přidání nového uživatele selhalo");
        }
    }
}

public function update_password(string $email, string $newPassword, string $passwordCon) : void
{
    if($newPassword = $passwordCon)
    {
        $enc_password = $this -> crypt -> encrypt($newPassword);
        $sql = "UPDATE ".self::TABLE_NAME." SET Password = '$enc_password' WHERE Email = '$email'";
        if(!$this -> connection -> query($sql))
        {
            throw new Exception("Resetování hesla selhalo");
        }
    }
}


public function delete_user(string $username) : void
{
 $sql = "DELETE FROM ".self::TABLE_NAME." WHERE Email = '$username'";
 if(!$this -> connection -> query($sql))
 {
     throw new Exception("Smazání uživatele selhalo");
 }
}
}

?>