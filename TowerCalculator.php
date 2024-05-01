<?php

class TowerCalculator
{
    public function calculateTower(int $toCalculate): void
    {
        $result = $toCalculate;

        for($multiplicator = 2; $multiplicator  <= 9; $multiplicator++)
        {
            echo $multiplicator . " * " . $result . " = ";
            $result = $result * $multiplicator;
            echo $result . "\n";
        }

        for($quotient = 2; $quotient <= 9; $quotient++)
        {
            echo $result . " / " . $quotient ." = " ;
            $result = $result / $quotient;
            echo $result . "\n";
        }

    }
}

$towerCalculator = new TowerCalculator();
$towerCalculator->calculateTower($argv[1]);