<?php

namespace src\Models;

trait PrintData
{

    public function printData($text)
    {
        echo "<br>";
        echo "testando print: " . $text;
    }
}
