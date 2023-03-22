<?php

interface iauth
{
    public function get_user(string $username, string $password) : array;
    public function logout() : void;
}

?>
