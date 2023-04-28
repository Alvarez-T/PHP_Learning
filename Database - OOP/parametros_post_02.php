<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>
<?php

require 'database.php';
require 'AuthorRepository.php';

function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['firstName']) and validar_post($_POST['lastName'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    
    $connection = ConnectDatabase();

    $authorRepo = new authorRepository($connection);
    $authorRepo->CreateNew($firstName, $lastName);


    echo '<br><br>';
    echo '<h1> Autor adicionado </h1><br>';
    echo 'Nome: '. $firstName;
    echo '<br>';
    echo 'Sobrenome: '. $lastName;
    echo '<br><br>';
    echo '<h1> Autores cadastrados </h1>';


    $table = '
    <table  border=1>
        <tr class="table-primary">
            <th> Id </th>
            <th> Nome </th>
            <th> Sobrenome </th>
        </tr>
    ';

    foreach($authorRepo->GetAuthors() as $author)
    {
            
        $table .= '
        <tr>
            <td>'.$author[0].'</td>
            <td>'.$author[1].'</td>
            <td>'.$author[2].'</td>
        </tr>
        ';
    }

    $table .= '</table>';
    echo $table;
    $connection = null;
}

?>
</body>
</html>