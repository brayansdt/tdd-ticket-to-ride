<?php

use PHPUnit\Framework\TestCase;

class ScorerTest extends TestCase
{
    public function testCannotCalculateForInvalidLength()
    {
        $scorer = new Scorer();

        $length = $this->prophesize(Length::class);
        $length->getValue()->willReturn(7);

        $route = $this->prophesize(Route::class);
        $route->getLength()->willReturn($length->reveal());

        $this->expectException(InvalidArgumentException::class);
        $scorer->getScoreForRoute($route->reveal());
    }

    public function testShouldReturnCorrectScoreForRouteOfOneLength()
    {
        $scorer = new Scorer();

        $length = $this->prophesize(Length::class);
        $length->getValue()->willReturn(1);

        $route = $this->prophesize(Route::class);
        $route->getLength()->willReturn($length->reveal());

        $score = $scorer->getScoreForRoute($route->reveal());

        $this->assertEquals(1, $score);
    }

    public function testShouldReturnCorrectScoreForRouteOfTwoLength()
    {
        $scorer = new Scorer();

        $length = $this->prophesize(Length::class);
        $length->getValue()->willReturn(2);

        $route = $this->prophesize(Route::class);
        $route->getLength()->willReturn($length->reveal());

        $score = $scorer->getScoreForRoute($route->reveal());

        $this->assertEquals(2, $score);
    }

    public function testShouldReturnCorrectScoreForRouteOfThreeLength()
    {
        $scorer = new Scorer();

        $length = $this->prophesize(Length::class);
        $length->getValue()->willReturn(3);

        $route = $this->prophesize(Route::class);
        $route->getLength()->willReturn($length->reveal());

        $score = $scorer->getScoreForRoute($route->reveal());

        $this->assertEquals(4, $score);
    }

    public function testShouldReturnCorrectScoreForRouteOfFourLength()
    {
        $scorer = new Scorer();

        $length = $this->prophesize(Length::class);
        $length->getValue()->willReturn(4);

        $route = $this->prophesize(Route::class);
        $route->getLength()->willReturn($length->reveal());

        $score = $scorer->getScoreForRoute($route->reveal());

        $this->assertEquals(7, $score);
    }

    public function testShouldReturnCorrectScoreForRouteOfFiveLength()
    {
        $scorer = new Scorer();

        $length = $this->prophesize(Length::class);
        $length->getValue()->willReturn(5);

        $route = $this->prophesize(Route::class);
        $route->getLength()->willReturn($length->reveal());

        $score = $scorer->getScoreForRoute($route->reveal());

        $this->assertEquals(10, $score);
    }

    public function testShouldReturnCorrectScoreForRouteOfSixLength()
    {
        $scorer = new Scorer();

        $length = $this->prophesize(Length::class);
        $length->getValue()->willReturn(6);

        $route = $this->prophesize(Route::class);
        $route->getLength()->willReturn($length->reveal());

        $score = $scorer->getScoreForRoute($route->reveal());

        $this->assertEquals(15, $score);
    }

}