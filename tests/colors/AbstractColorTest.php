<?php

use Colors\Color;
use PHPUnit\Framework\TestCase;

abstract class AbstractColorTest extends TestCase
{
    /** @var  Color */
    protected $color;

    abstract protected function setColorInstance();

    protected function setUp()
    {
        parent::setUp();
        $this->setColorInstance();
    }

    public function testCorrectForColorPurple()
    {
        $this->assertFalse($this->color->isPurple());;
    }

    public function testCorrectForColorWhite()
    {
        $this->assertFalse($this->color->isWhite());;
    }

    public function testCorrectForColorYellow()
    {
        $this->assertFalse($this->color->isYellow());;
    }

    public function testCorrectForColorOrange()
    {
        $this->assertFalse($this->color->isOrange());;
    }

    public function testCorrectForColorBlack()
    {
        $this->assertFalse($this->color->isBlack());;
    }

    public function testCorrectForColorRed()
    {
        $this->assertFalse($this->color->isRed());;
    }

    public function testCorrectForColorGreen()
    {
        $this->assertFalse($this->color->isGreen());;
    }
}