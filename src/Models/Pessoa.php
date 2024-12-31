<?php

class Pessoa
{

    // A partir do php 7.4 pode definir o tipo da variavel
    public string $nome;
    private int $age;
    // = atributo estatico pertence somente a classe
    private static int $numPeople = 0;

    private Adress $adress;

    public function __construct(int $ageNew, Adress $adress)
    {
        $this->nome = "gabriel";
        $this->validateAge($ageNew);
        // = Maneira certo de definir o nome da classe dentro dela mesma
        self::$numPeople++;

        $this->adress = $adress;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public  function setNome($newName)
    {

        $this->nome = $newName;
    }
    public function getAge()
    {
        return $this->age;
    }

    public  function setAge($newAge)
    {

        $this->age = $newAge;
    }

    public function getAdress(): Adress
    {
        return $this->adress;
    }


    // = indica o tipo de retorno que a funcao vai retornar
    public static function getNumPeople(): int
    {
        return self::$numPeople;
    }

    private function validateAge($age)
    {
        if ($age > 100 || $age < 0) {
            echo "error";
            exit();
        } else {
            $this->age = $age;
        }
    }
}
