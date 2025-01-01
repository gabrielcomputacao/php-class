<?php


class Employee extends Pessoa
{

    private string $position;
    private float $salary;


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
}
