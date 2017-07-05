<?php

namespace Colors\Routes;


use Colors\Color;

abstract class RouteColor
{
    abstract public function compareWithColor(Color $color);
}