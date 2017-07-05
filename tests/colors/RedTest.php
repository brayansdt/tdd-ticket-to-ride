<?php
use Colors\Red;

class RedTest extends AbstractColorTest
{

    protected function setColorInstance()
    {
        $this->color = new Red();
    }

    public function testCorrectForColorRed()
    {
        $this->assertTrue($this->color->isRed());
    }

}
