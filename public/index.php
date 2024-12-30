<?php

require "../src/Models/Pessoa.php";

require "../utils/functions.php";

$pessoa = new Pessoa(35);

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
