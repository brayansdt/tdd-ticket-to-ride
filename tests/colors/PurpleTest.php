<?php
use Colors\Purple;

class PurpleTest extends AbstractColorTest
{

    protected function setColorInstance()
    {
        $this->color = new Purple();
    }

    public function testCorrectForColorPurple()
    {
        $this->assertTrue($this->color->isPurple());
    }

}
