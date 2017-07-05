<?php

namespace Colors\Routes;


use Colors\Color;

class PurpleRoute extends RouteColor
{

    public function compareWithColor(Color $color)
    {
        return $color->isPurple();
    }
}