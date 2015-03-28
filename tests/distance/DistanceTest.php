<?php

use JLaso\Gps\Tools;
use JLaso\Gps\Point;


class DistanceTest extends PHPUnit_Framework_TestCase
{
    /**
     * source: www.distace.to/Origin/Destination
     *
     * Paris/Madrid  1.052,69 km   #1 Paris (48.856667,2.350987)  #2 Madrid (40.416691,-3.700345)
     */
    function testParisMadridDistance()
    {
        $distance = Tools::distance(48.856667, 2.350987, 40.416691, -3.700345);
        // Let assume the result it's okay if the error of calculated distance is less than 1/1000  (1km)
        $this->assertLessThan(1.052, abs(1052.69 - $distance));

        // now use the indirect method to calculate distance in the same conditions
        $madrid = new Point(40.416691,-3.700345);
        $paris = new Point(48.856667,2.350987);

        $this->assertLessThan(1.052, abs(1052.69 - $madrid->distanceTo($paris)));
    }

    /**
     * @expectedException \Exception
     */
    function testException()
    {
        $distance = Tools::distance('a', 'b', 'c', 'd');
    }

}