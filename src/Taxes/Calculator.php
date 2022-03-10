<?php

namespace App\Taxes;

class Calculator
{
    public function calcul($prix)
    {
        return $prix * (20 / 100);
    }
}
