<?php

interface Authenticate
{

    public function login(string $employee, string $password): void;
}
