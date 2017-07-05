<?php

use Colors\Routes\RouteColor;
use PHPUnit\Framework\TestCase;

class RouteTest extends TestCase
{
    public function testShouldHaveTwoCitiesALengthAndAColor()
    {
        /** @var City $startCity */
        $startCity = $this->prophesize(City::class)->reveal();
        /** @var City $destinationCity */
        $destinationCity = $this->prophesize(City::class)->reveal();
        /** @var Length $length */
        $length = $this->prophesize(Length::class)->reveal();
        /** @var RouteColor $color */
        $color = $this->prophesize(RouteColor::class)->reveal();

        $route = new Route($startCity, $destinationCity, $length, $color);

        $this->assertSame($startCity, $route->getStartCity());
        $this->assertSame($destinationCity, $route->getDestinationCity());
        $this->assertSame($length, $route->getLength());
        $this->assertSame($color, $route->getColor());
    }
}
