<?php

namespace Map\Game\Components;

class Tile
{
    /** @var int */
    protected $x;
    /** @var int */
    protected $y;

    /**
     * Tile constructor.
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return '('.$this->x.' ,'.$this->y.')';
    }
}