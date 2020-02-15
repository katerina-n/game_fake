<?php

namespace Map\Game\Collections;

use Map\Game\Components\Component;
use Map\Game\Components\Tile;

class Map implements \Iterator, \Countable
{
    const MIN = 10000;
    const MAX = 40000;

    private $tiles = array();
    private $position;

    /**
     * Map constructor.
     */
    public function __construct()
    {
        $this->position = 0;
    }

    /**
     * @param Tile $tile
     * @throws \Exception
     */
    public function push(Tile $tile)
    {
        if($tile instanceof Tile === false) {
            throw new \Exception('Error type');
        }
        array_push($this->tiles,$tile);

    }

    /**
     *
     */
    public function pop()
    {
        array_pop($this->tiles);
    }

    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->tiles[$this->position];
    }

    /**
     * @return int|mixed
     */
    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return isset($this->tiles[$this->position]);
    }
    /**
     * @return int
     */
    public function count()
    {
        return count($this->tiles);
    }

    /**
     * @param int $x
     * @param int $y
     * @return bool
     */
    public function isFreePosition(int $x, int $y) : bool
    {
        /** @var Tile $tile */
        foreach ($this as $key => $tile) {
            if ($tile->getTile()->getX() == $x && $tile->getTile()->getY() == $y) {
                return false;
            }
        }
        return true;

    }

    /**
     * @param Tile $tile1
     * @param Tile $tile2
     * @return float
     */
    public function getLengthBetweenTile(Tile $tile1, Tile $tile2) : float
    {
        $length = sqrt( pow(($tile1->getX() - $tile2->getX()),2) + pow(($tile1->getY() - $tile2->getY()),2));

        return round($length, 1);
    }

}