<?php 

class Speedometer 
{
    public const KM_CONVERSION = 0.621371;
    public const MILES_CONVERSION = 1.60934;

    public static function convertKmToMiles(int $distance): float {
        return $distance * self::KM_CONVERSION;
    }
    public static function convertMilesToKm(int $distance): float {
        return $distance * self::MILES_CONVERSION;
    }
}