<?php


function ConnectDatabase()
{ 
    try {

        require 'dados_banco.php';
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
}

?>