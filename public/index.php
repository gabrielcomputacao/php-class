<?php

require "../src/Models/Pessoa.php";
require "../src/Models/Adress.php";

require "../utils/functions.php";


$adress = new Adress('mg', 'divi', 'parana');
$pessoa = new Pessoa(35, $adress);

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
