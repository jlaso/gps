<?php

namespace JLaso\Gps;

/**
 * Class Tools
 * @package JLaso\Gps
 * @author Joseluis Laso <jlaso@joseluislaso.es>
 */

class Tools
{

    /**
     * @param $latitude1
     * @param $longitude1
     * @param $latitude2
     * @param $longitude2
     * @return float distance between coordinates in kilometers
     * @throws \Exception
     */
    public static function distance($latitude1, $longitude1, $latitude2, $longitude2)
    {
        if(!is_numeric($latitude1) || !is_numeric($longitude1) || !is_numeric($latitude2) || !is_numeric($longitude2)){
            throw new \Exception("distance can not be calculated with non numerical values!");
        }
        // normalize values
        $latitude1  = floatval($latitude1);
        $longitude1 = floatval($longitude1);
        $latitude2  = floatval($latitude2);
        $longitude2 = floatval($longitude2);

        $dLatitude  = ($latitude2 - $latitude1) / 2;
        $dLongitude = ($longitude2 - $longitude1) / 2;
        $tmp        = sin(deg2rad($dLatitude)) * sin(deg2rad($dLatitude)) +
                        cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin(deg2rad($dLongitude)) * sin(deg2rad($dLongitude));
        $aux        = asin(min(1, sqrt($tmp)));

        return round(12745.9728 * $aux, 4);
    }

    /**
     * @param $value
     * @return float
     */
    public static function toMiles($value)
    {
        return 0.621 * $value;
    }

}

