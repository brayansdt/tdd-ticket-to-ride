<?php
use Colors\Green;

class GreenTest extends AbstractColorTest
{

    protected function setColorInstance()
    {
        $this->color = new Green();
    }

    public function testCorrectForColorGreen()
    {
        $this->assertTrue($this->color->isGreen());
    }

}
