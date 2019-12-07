<?php

use Advent\Day1\Fuel;
use Vector\Lib\Arrays;
use Vector\Lib\Math;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Fuel.php';

$result = Math::sum(
    Arrays::map(
        Fuel::fuelCalcUntilZero(),
        Fuel::getModules()
    )
);

var_dump($result);
// 4882038
