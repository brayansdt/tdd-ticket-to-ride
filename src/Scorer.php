<?php

class Scorer
{
    private $scores = [
        1 => 1,
        2 => 2,
        3 => 4,
        4 => 7,
        5 => 10,
        6 => 15
    ];

    public function getScoreForRoute(Route $route): int
    {
        $this->ensureLengthIsValid($route->getLength());
        return $this->scores[$route->getLength()->getValue()];
    }

    private function ensureLengthIsValid(Length $length): void
    {
        $value = $length->getValue();
        if (!key_exists($value, $this->scores)) {
            throw new InvalidArgumentException('Invalid length');
        }
    }
}