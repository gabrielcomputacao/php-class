<?php

namespace src\Models;

interface Authenticate
{

    public function login(string $employee, string $password): void;
}
