<?php

namespace Colors\Routes;


use Colors\Color;

class GreenRoute extends RouteColor
{

    public function compareWithColor(Color $color)
    {
        return $color->isGreen();
    }

}