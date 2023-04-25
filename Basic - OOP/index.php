<?php

require_once 'Pessoa.php';
require_once 'SalaVirtual.php';

$vini = new Pessoa("Vini_wini", 30);
$alvarez = new Pessoa("ThiThi", 23);
$mumu = new Pessoa("MurilinhoInho", 19);
$klay = new Pessoa("Klayverty666", 25);
$vitor = new Pessoa("Vitinho91", 18);

$sala1 = new SalaVirtual(101);
$sala2 = new SalaVirtual(206);

$sala1->addIntegrante($vini);
$sala1->addIntegrante($mumu);
$sala1->addIntegrante($vitor);

$sala2->addIntegrante($vini);
$sala2->addIntegrante($alvarez);
$sala2->addIntegrante($mumu);
$sala2->addIntegrante($klay);
$sala2->addIntegrante($vitor);

echo '-----------------------<br>';
$sala1->getIntegrantes();
echo '-----------------------<br>';
$sala2->getIntegrantes();

?>
