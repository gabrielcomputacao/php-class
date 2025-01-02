<?php

namespace src\Models;
//  = Verifica se o printData que é uma trait ja foi requerido em alguma parte se sim ele nao importa novamente
// require_once 'PrintData.php';
class Adress
{

    use PrintData;
    private string $uf;
    private string $city;
    private string $street;

    public function __construct(string $uf, string $city, string $street)
    {

        $this->uf = $uf;
        $this->city = $city;
        $this->street = $street;
    }

    public function getUf(): string
    {

        return $this->uf;
    }
    public function setUf(string $uf): void
    {

        $this->uf = $uf;
    }
}
