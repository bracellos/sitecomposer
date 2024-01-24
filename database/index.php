<?php
use Nette\Database\Connection;
require_once __DIR__."/../vendor/autoload.php";
$db = new Connection('mysql:host=localhost;dbname=entra21', 'root', 'root');

$dados = $db->fetchAll('SELECT * FROM pdv_produtos');

echo "<pre>";
print_r($dados);
echo "</pre>";