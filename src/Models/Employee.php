<?php

require "Authenticate.php";

class Employee extends Pessoa implements Authenticate
{

    private string $position;
    private float $salary;
    private string $password;

    public function __construct(string $nome, int $age, Adress $adress, string $position, float $salary)
    {
        parent::__construct($nome, $age, $adress);
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getPosition()
    {
        return $this->position;
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function setPosition(string $position)
    {
        $this->position = $position;
    }
    public function setSalary(float $salary)
    {
        $this->salary = $salary;
    }

    public function setDesconto(): void
    {
        $this->desconto = 0.10;
    }

    public  function _toString(): void
    {

        $text = "<pre>" .

            "Nome:" . $this->age .
            "Endereço:" . $this->adress->getUf() .
            "Renda:" . $this->salary .

            "</pre>";

        echo $text;
    }

    public function login(string $employee, string $password): void
    {
        if ($this->nome == $employee && $password == $this->password) {
            echo "passou";
        } else {
            echo "nao passou";
        }
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }
}
