<?php
use Colors\Orange;

class OrangeTest extends AbstractColorTest
{

    protected function setColorInstance()
    {
        $this->color = new Orange();
    }

    public function testCorrectForColorOrange()
    {
        $this->assertTrue($this->color->isOrange());
    }

}
