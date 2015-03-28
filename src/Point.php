<?php
declare(strict_types=1);

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

    function __construct(float $latitude, float $longitude)
    {
        $this->latitude  = $latitude;
        $this->longitude = $longitude;
    }

    public function setLatitude(float $latitude)
    {
        $this->latitude = $latitude;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLongitude(float $longitude)
    {
        $this->longitude = $longitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function distanceTo(Point $point): float
    {
        return Tools::distance($this->getLatitude(), $this->getLongitude(), $point->getLatitude(), $point->getLongitude());
    }


}