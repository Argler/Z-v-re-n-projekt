<?php

interface Irepository
{
    public function create(array $fieldsAndValues) : int;
    public function delete(string $condition) : void;
}

?>