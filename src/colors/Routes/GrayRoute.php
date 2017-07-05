<?php

namespace Colors\Routes;

use Colors\Color;

class GrayRoute extends RouteColor
{

    public function compareWithColor(Color $color)
    {
        return true;
    }
}