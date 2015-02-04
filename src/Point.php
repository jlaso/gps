<?php

namespace JLaso\Gps;

/**
 * Class Point
 * @package JLaso\Gps
 * @author Joseluis Laso <jlaso@joseluislaso.es>
 */

class Point
{
    /** @var float */
    protected $longitude;
    /** @var float */
    protected $latitude;

    /**
     * @param float $latitude
     * @param float $longitude
     */
    function __construct($latitude, $longitude)
    {
        $this->latitude  = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param Point $point
     * @return float
     */
    public function distanceTo(Point $point)
    {
        return Tools::distance($this->getLatitude(), $this->getLongitude(), $point->getLatitude(), $point->getLongitude());
    }


}