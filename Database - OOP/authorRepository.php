<?php

class authorRepository
{
    private PDO $database;

    public function __construct(PDO $database)
    {
        $this->database = $database;
    }

    public function CreateNew($name, $lastname)
    {
        $sql = "INSERT INTO AUTHORS VALUES (null, '" . $name . "', '" . $lastname . "');";
        $this->database->exec($sql);
    }

    public function GetAuthors()
    {
        $sql = "SELECT * FROM AUTHORS";
        $queryResult = $this->database->query($sql);
        return $queryResult;
    }
}

?>