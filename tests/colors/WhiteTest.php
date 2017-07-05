<?php
use Colors\White;

class WhiteTest extends AbstractColorTest
{

    protected function setColorInstance()
    {
        $this->color = new White();
    }

    public function testCorrectForColorWhite()
    {
        $this->assertTrue($this->color->isWhite());
    }

}
