<?php
use Colors\Black;

class BlackTest extends AbstractColorTest
{

    protected function setColorInstance()
    {
        $this->color = new Black();
    }

    public function testCorrectForColorBlack()
    {
        $this->assertTrue($this->color->isBlack());
    }

}
