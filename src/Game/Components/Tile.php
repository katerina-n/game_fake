<?php

namespace Map\Game\Components;

class Tile
{
    /** @var float */
    protected $x;
    /** @var float */
    protected $y;
    /** @var string */
    protected $type;

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY(): float
    {
        return $this->y;
    }


    /**
     * @return $this
     */
    public function getTile()
    {
        return $this;
    }

    /**
     * @return string
     */
    public function getType():string
    {
        return $this->type;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param $x
     * @param $y
     * @param $type
     */
    public function setTile($x, $y, $type)
    {
        $this->x = $x;
        $this->y = $y;
        $this->type = $type;
    }


}