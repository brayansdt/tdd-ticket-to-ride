<?php

namespace Colors\Routes;


use Colors\Color;

class OrangeRoute extends RouteColor
{

    public function compareWithColor(Color $color)
    {
        return $color->isOrange();
    }


}