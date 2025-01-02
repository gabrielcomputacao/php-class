<?php

// = Classe abstract nao pode ter um objeto instanciaado por ela
abstract class Pessoa
{

    // A partir do php 7.4 pode definir o tipo da variavel
    public string $nome;
    // ! o private encapsula totalmente o atributo, somente a classe tem acesso
    protected int $age;
    // = atributo estatico pertence somente a classe
    private static int $numPeople = 0;
    // ! o protected classes filhas e a propria classe tem acesso
    protected float $desconto;
    protected Adress $adress;

    public function __construct(string $name, int $ageNew, Adress $adress)
    {
        $this->nome = $name;
        $this->validateAge($ageNew);
        // = Maneira certa de definir o nome da classe dentro dela mesma
        self::$numPeople++;
        $this->setDesconto();
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

    // = O protected so pode ser usado pela classe pai e classe filha
    protected abstract function setDesconto(): void;

    public function getDesconto()
    {
        return $this->desconto;
    }

    public abstract function _toString(): void;
}
