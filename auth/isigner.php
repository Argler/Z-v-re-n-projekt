<?php

interface isigner
{
public function add_user(string $email, string $password, string $confirmPassword, string $firstName, string $Surname) : void;
public function update_password(string $email, string $newPassword, string $confirmNewPassword) : void;
public function delete_user(string $email) : void;
}

?>