<?php

namespace Advent\Day1;

use Vector\Core\Module;
use Vector\Lib\Lambda;
use Vector\Lib\Math;

/**
 * @method static fuelCalc(...$args)
 * @method static fuelCalcUntilZero(...$args)
 */
class Fuel extends Module
{
    public static function getModules()
    {
        return explode("\n", file_get_contents(__DIR__ . '/input.txt'));
    }

    public static function __fuelCalc(int $module): int
    {
        return Lambda::pipe(
            Math::divide(3),
            Math::subtract(2)
        )($module);
    }

    public static function __fuelCalcUntilZero(int $module): int
    {
        $fuel = $module;

        $fuelRequirements = 0;
        while ($fuel >= 0) {
            $fuel = self::fuelCalc($fuel);
            if ($fuel <= 0) {
                break;
            }
            $fuelRequirements += $fuel;
        }

        return $fuelRequirements;
    }
}
