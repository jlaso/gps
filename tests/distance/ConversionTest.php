<?php
declare(strict_types=1);

use JLaso\Gps\Tools;


class ConversionTest extends PHPUnit_Framework_TestCase
{
    function testKilometersMilesConversion()
    {
        $this->assertEquals(0.621, Tools::toMiles(1));
    }

}