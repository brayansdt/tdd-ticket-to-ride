<?php

use Colors\Color;
use PHPUnit\Framework\TestCase;

class CardTest extends TestCase
{
    public function testShouldHaveColor()
    {
        /** @var Color $color */
        $color = $this->prophesize(Color::class)->reveal();
        $card = new Card($color);

        $this->assertSame($color, $card->getColor());
    }
}