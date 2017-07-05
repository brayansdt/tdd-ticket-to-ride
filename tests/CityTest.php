<?php

use PHPUnit\Framework\TestCase;

class CityTest extends TestCase
{

    public function testShouldHaveName()
    {
        $cityName = 'foo';
        $fooCity = new City($cityName);

        $this->assertEquals($cityName, $fooCity->getName());
    }

//    public function testCannotBeCreatedWithAnEmptyString()
//    {
//        $this->expectException(InvalidArgumentException::class);
//        new City();
//    }
}