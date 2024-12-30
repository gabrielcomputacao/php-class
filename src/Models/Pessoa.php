<?php

class Pessoa
{

    // A partir do php 7.4 pode definir o tipo da variavel
    public string $nome;
    private int $age;

    public function __construct(int $ageNew)
    {
        $this->nome = "gabriel";
        $this->validateAge($ageNew);
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
