<?php

use Colors\Black;
use Colors\Color;
use Colors\Red;
use Colors\Routes\RouteColor;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\Prophecy\ObjectProphecy;

class TurnTest extends TestCase
{

    public function testShouldBeAbleToClaimARouteWithValidCards()
    {
        $expectedPoints = 15;

        $routeColor = $this->prophesize(RouteColor::class);
        $routeColor->compareWithColor(Argument::type(Red::class))->willReturn(true);

        $route = $this->getRouteMock(1, $routeColor->reveal());

        $scorer = $this->prophesize(Scorer::class);
        $scorer->getScoreForRoute($route)->willReturn($expectedPoints);

        $redColor = $this->prophesize(Red::class);
        $redColor->isRed()->willReturn(true);

        $redCard = $this->prophesize(Card::class);
        $redCard->getColor()->willReturn($redColor->reveal());

        $cardArray = [];
        $cardArray[] = $redCard->reveal();

        $turn = new Turn($scorer->reveal());

        $points = $turn->scoreRoute($route, $cardArray);

        $this->assertEquals($expectedPoints, $points);
    }


    public function testCannotScoreARouteWithInvalidNumberOfCards()
    {
        $color = $this->prophesize(RouteColor::class)->reveal();
        $route = $this->getRouteMock(3, $color);

        $scorer = $this->prophesize(Scorer::class);

        $firstCard = $this->prophesize(Card::class);

        $cardArray = [];
        $cardArray[] = $firstCard->reveal();

        $turn = new Turn($scorer->reveal());

        $this->expectException(LengthException::class);
        $turn->scoreRoute($route, $cardArray);
    }

    public function testCannotScoreARouteWithInvalidCardColors()
    {
        $routeColor = $this->prophesize(RouteColor::class);
        $routeColor->compareWithColor(Argument::type(Red::class))->willReturn(true);
        $routeColor->compareWithColor(Argument::type(Black::class))->willReturn(false);

        $route = $this->getRouteMock(3, $routeColor->reveal());


        $scorer = $this->prophesize(Scorer::class);

        $redColor = $this->prophesize(Red::class);
        $redColor->isRed()->willReturn(true);

        $redCard = $this->prophesize(Card::class);
        $redCard->getColor()->willReturn($redColor->reveal());

        $blackColor = $this->prophesize(Black::class);
        $blackColor->isRed()->willReturn(false);

        $blackCard = $this->prophesize(Card::class);
        $blackCard->getColor()->willReturn($blackColor->reveal());

        $cardArray = [];
        $cardArray[] = $redCard->reveal();
        $cardArray[] = $redCard->reveal();
        $cardArray[] = $blackCard->reveal();


        $turn = new Turn($scorer->reveal());

        $this->expectException(InvalidArgumentException::class);
        $turn->scoreRoute($route, $cardArray);
    }

    public function testCanScoreWithGrayRouteAndValidCardColors()
    {
        $expectedPoints = 2;

        $routeColor = $this->prophesize(RouteColor::class);
        $routeColor->compareWithColor(Argument::type(Red::class))->willReturn(true);

        $route = $this->getRouteMock(2, $routeColor->reveal());

        $scorer = $this->prophesize(Scorer::class);
        $scorer->getScoreForRoute($route)->willReturn($expectedPoints);

        $redColor = $this->prophesize(Red::class);
        $redColor->isRed()->willReturn(true);

        $redCard = $this->prophesize(Card::class);
        $redCard->getColor()->willReturn($redColor->reveal());

        $cardArray = [];
        $cardArray[] = $redCard->reveal();
        $cardArray[] = $redCard->reveal();

        $turn = new Turn($scorer->reveal());

        $points = $turn->scoreRoute($route, $cardArray);

        $this->assertEquals($expectedPoints, $points);
    }

    private function getRouteMock(int $length, RouteColor $color = null)
    {
        $lengthMock = $this->prophesize(Length::class);
        $lengthMock->getValue()->willReturn($length);

        $route = $this->prophesize(Route::class);
        $route->getLength()->willReturn($lengthMock->reveal());

        $route->getColor()->willReturn($color);

        return $route->reveal();
    }
}