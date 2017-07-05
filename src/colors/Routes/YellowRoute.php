<?php

namespace Colors\Routes;


use Colors\Color;

class YellowRoute extends RouteColor
{

    public function compareWithColor(Color $color)
    {
        return $color->isYellow();
    }
}