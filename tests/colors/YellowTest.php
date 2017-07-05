<?php
use Colors\Yellow;

class YellowTest extends AbstractColorTest
{

    protected function setColorInstance()
    {
        $this->color = new Yellow();
    }

    public function testCorrectForColorYellow()
    {
        $this->assertTrue($this->color->isYellow());
    }

}
