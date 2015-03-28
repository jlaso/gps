<?php
declare(strict_types=1);

namespace JLaso\Gps;

/**
 * Class Tools
 * @package JLaso\Gps
 * @author Joseluis Laso <jlaso@joseluislaso.es>
 */

class Tools
{

    public static function distance(float $latitude1, float $longitude1, float $latitude2, float $longitude2): float
    {
        $dLatitude  = ($latitude2 - $latitude1) / 2;
        $dLongitude = ($longitude2 - $longitude1) / 2;
        $tmp        = sin(deg2rad($dLatitude)) * sin(deg2rad($dLatitude)) +
                        cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin(deg2rad($dLongitude)) * sin(deg2rad($dLongitude));
        $aux        = asin(min(1, sqrt($tmp)));

        return round(12745.9728 * $aux, 4);
    }

    public static function toMiles(float $value): float
    {
        return 0.621 * $value;
    }

}

