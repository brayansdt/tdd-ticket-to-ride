<?php

namespace Colors\Routes;


use Colors\Color;

class BlackRoute extends RouteColor
{

    public function compareWithColor(Color $color)
    {
        return $color->isBlack();
    }
}