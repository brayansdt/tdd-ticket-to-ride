<?php

class Turn
{
    /**
     * @var Scorer
     */
    private $scorer;

    public function __construct(Scorer $scorer)
    {
        $this->scorer = $scorer;
    }

    public function scoreRoute(Route $route, array $cardArray): int
    {
        $this->ensureNumberOfCardsForRoute($route, $cardArray);
        $this->ensureCardColorsAreValidForRoute($route, $cardArray);
        return $this->scorer->getScoreForRoute($route);
    }

    private function ensureNumberOfCardsForRoute(Route $route, array $cardArray)
    {
        if ($route->getLength()->getValue() !== count($cardArray)) {
            throw new LengthException('The number of cards should be the same of route\'s length');
        }
    }

    private function ensureCardColorsAreValidForRoute(Route $route, array $cardArray)
    {
        $routeColor = $route->getColor();
        /** @var Card $card */
        foreach ($cardArray as $card) {
            if (!$routeColor->compareWithColor($card->getColor())) {
                throw new InvalidArgumentException();
            }
        }
    }

}