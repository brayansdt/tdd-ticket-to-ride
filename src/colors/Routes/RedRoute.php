<?php

namespace Colors\Routes;


use Colors\Color;

class RedRoute extends RouteColor
{

    public function compareWithColor(Color $color)
    {
        return $color->isRed();
    }
}