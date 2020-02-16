<?php

namespace Map\Game\Components;

use Map\Game\Interfaces\Type;
use Map\Game\Units\Unit;

class Component implements Type
{
    /** @var array  */
    protected $accessFor = [];
    /** @var string */
    protected $type;
    /** @var Tile */
    private $tile;

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type) : Type
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param Unit $unit
     * @return bool
     */
    public function isAccessebleForUnit(Unit $unit) : bool
    {
        return (bool)in_array(get_class($unit), $this->accessFor);
    }


    /**
     * @param Tile $tile
     * @return $this
     */
    public function setTile(Tile $tile) : Component
    {
        $this->tile = $tile;

        return $this;
    }

    /**
     * @return Tile
     */
    public function getTile() : Tile
    {
        return $this->tile;
    }

}