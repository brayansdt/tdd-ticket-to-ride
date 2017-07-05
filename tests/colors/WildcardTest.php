<?php
use Colors\Wildcard;

class WildcardTest extends AbstractColorTest
{

    protected function setColorInstance()
    {
        $this->color = new Wildcard();
    }

    public function testCorrectForColorPurple()
    {
        $this->assertTrue($this->color->isPurple());
    }

    public function testCorrectForColorWhite()
    {
        $this->assertTrue($this->color->isWhite());
    }

    public function testCorrectForColorYellow()
    {
        $this->assertTrue($this->color->isYellow());
    }

    public function testCorrectForColorOrange()
    {
        $this->assertTrue($this->color->isOrange());
    }

    public function testCorrectForColorBlack()
    {
        $this->assertTrue($this->color->isBlack());
    }

    public function testCorrectForColorRed()
    {
        $this->assertTrue($this->color->isRed());
    }

    public function testCorrectForColorGreen()
    {
        $this->assertTrue($this->color->isGreen());
    }


}
