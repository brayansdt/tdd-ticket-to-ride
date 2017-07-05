<?php

namespace Colors\Routes;


use Colors\Color;

class WhiteRoute extends RouteColor
{

    public function compareWithColor(Color $color)
    {
        return $color->isWhite();
    }


}