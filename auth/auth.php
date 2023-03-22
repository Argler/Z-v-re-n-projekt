<?php
session_start();
require_once(__DIR__."/crypt.php");
require_once(__DIR__."/iauth.php");

class auth implements iauth

{
   private mysqli $connection; 
   private const TABLE_NAME = "users";
   private crypt $crypt;

   public function __construct(mysqli $conn)
   {
    $this -> connection = $conn;
    $this -> crypt = new crypt();
   } 

   // public function check_loggedIn(): bool
   // {
   //  if(isset($_SESSION["email"]) && isset ($_SESSION["heslo"]))
   //  {
   //     return true;
   //  } else {
   //      return false;
   //  }
   //  }
   //  public function check_loggedIn_admin(): bool
   //  {
   //   if(isset($_SESSION["admin"]) && $_SESSION["admin"])
   //   {
   //      return true;
   //   } else {
   //       return false;
   //   }
   //   }

   public function get_user(string $userName, string $password): array
   {
      $enc_password = $this -> crypt -> encrypt($password);
      $sql = "SELECT * FROM ".self::TABLE_NAME." WHERE Email = '$userName' AND Password = '$enc_password'";
      $res = $this -> connection -> query($sql);
      if($res -> num_rows === 0)
      {
          return [];
      }
      return $res -> fetch_assoc();
   }



   public function logout(): void
   {
    setcookie("username", "", time() - 86400 * 10);
    unset($_COOKIE["username"]);

    setcookie("password", "", time() - 86400 * 10);
    unset($_COOKIE["password"]);

    setcookie("remember", "", time() - 86400 * 10);
    unset($_COOKIE["remember"]);

    unset($_SESSION["email"]);
    unset($_SESSION["heslo"]);
    unset($_SESSION["admin"]);
    unset($_SESSION["userId"]);

    header("Location: ../index-chilli-login.php");
   }
}
?>