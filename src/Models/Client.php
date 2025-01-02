<?php

namespace src\Models;

require_once 'PrintData.php';
// require_once "Authenticate.php";
class Client extends Pessoa implements Authenticate
{
    use PrintData;
    private string $dataNascimento;
    private float $renda;
    private string $password;

    public function __construct(string $nome, int $age, Adress $adress, string $dataNascimento, float $renda)
    {
        parent::__construct($nome, $age, $adress);
        $this->dataNascimento = $dataNascimento;
        $this->renda = $renda;
        $this->password = "222";
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function getReda()
    {
        return $this->renda;
    }

    public function setDataNascimento(string $date)
    {
        $this->dataNascimento = $date;
    }

    public function setRenda(float $renda)
    {
        $this->renda = $renda;
    }

    public function setDesconto(): void
    {
        $this->desconto = 0.05;
    }

    public  function _toString(): void
    {

        $text = "<pre>";

        $text += "Nome:" . $this->nome;
        $text += "Endereço:" . $this->adress->getUf();
        $text += "Renda:" . $this->renda;

        $text += '</pre>';

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
}
