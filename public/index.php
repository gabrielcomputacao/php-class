<?php

require "../src/Models/Pessoa.php";
require "../src/Models/Adress.php";
require "../src/Models/Employee.php";
require "../src/Models/Client.php";

require "../utils/functions.php";


$adress = new Adress('mg', 'divi', 'parana');
$pessoa = new Employee('gabriel', 35, $adress, ' senior developer', 15000);

// chamando atributo
echo "<p> $pessoa->nome </p>";

echo "<pre>";
var_dump($pessoa);

echo "</pre>";

// CHAMANDO METODOS ACESSORES

// automaticamente transforma em string se passar um int
$pessoa->setNome(35);

// como é uma string complexa precisa do {} para entender a chamada do metodo get
echo "<p> {$pessoa->getNome()} </p>";


showData($pessoa->getNome());

// usando metodos acessores
$pessoa->setAge(44);
showData($pessoa->getAge());

// usando metodos estaticos
echo "<br><br><br>";
echo Pessoa::getNumPeople();

showData($pessoa->getAdress());

echo "<hr>";
echo "<br><br><br>";

$employee1 = new Employee('igor', 23, $adress, 'developer', 30000);
showData($employee1);

echo "<hr>";
echo "<br>";

echo $employee1->getDesconto();

echo "<hr>";
echo "<br>";

$employee1->_toString();
