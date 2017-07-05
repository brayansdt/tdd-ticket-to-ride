<?php


use Colors\Color;
use Colors\Routes\RouteColor;

class Route
{
    /**
     * @var City
     */
    private $startCity;
    /**
     * @var City
     */
    private $destinationCity;
    /**
     * @var Length
     */
    private $length;

    private $color;

    /**
     * @return City
     */
    public function getStartCity(): City
    {
        return $this->startCity;
    }

    /**
     * @return City
     */
    public function getDestinationCity(): City
    {
        return $this->destinationCity;
    }

    /**
     * @return Length
     */
    public function getLength(): Length
    {
        return $this->length;
    }

    /**
     * @return RouteColor
     */
    public function getColor(): RouteColor
    {
        return $this->color;
    }

    public function __construct(City $startCity, City $destinationCity, Length $length, RouteColor $color)
    {
        $this->startCity = $startCity;
        $this->destinationCity = $destinationCity;
        $this->length = $length;
        $this->color = $color;
    }
}