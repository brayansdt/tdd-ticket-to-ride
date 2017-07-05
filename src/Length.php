<?php

class Length
{
    /**
     * @var int
     */
    private $value;

    /**
     * Length constructor.
     * @param $value
     */
    private function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public static function one(): self
    {
        return new self(1);
    }

    public static function two(): self
    {
        return new self(2);
    }

    public static function three(): self
    {
        return new self(3);
    }

    public static function four(): self
    {
        return new self(4);
    }

    public static function five(): self
    {
        return new self(5);
    }

    public static function six(): self
    {
        return new self(6);
    }
}