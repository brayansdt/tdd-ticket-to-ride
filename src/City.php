<?php

class City
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->ensureCityHasAValidName($name);
        $this->name = $name;
    }

    private function ensureCityHasAValidName(string $name): void
    {
        if (trim($name) === '') {
            throw new InvalidArgumentException(
                'A City should have a name.'
            );
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}