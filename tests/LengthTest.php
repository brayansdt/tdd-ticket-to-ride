<?php

use PHPUnit\Framework\TestCase;

class LengthTest extends TestCase
{
    public function testCanBeOne()
    {
        $value = 1;
        $length = Length::one();

        $this->assertEquals($value, $length->getValue());
    }

    public function testCanBeTwo()
    {
        $value = 2;
        $length = Length::two();

        $this->assertEquals($value, $length->getValue());
    }

    public function testCanBeThree()
    {
        $value = 3;
        $length = Length::three();

        $this->assertEquals($value, $length->getValue());
    }

    public function testCanBeFour()
    {
        $value = 4;
        $length = Length::four();

        $this->assertEquals($value, $length->getValue());
    }

    public function testCanBeFive()
    {
        $value = 5;
        $length = Length::five();

        $this->assertEquals($value, $length->getValue());
    }

    public function testCanBeSix()
    {
        $value = 6;
        $length = Length::six();

        $this->assertEquals($value, $length->getValue());
    }
}
