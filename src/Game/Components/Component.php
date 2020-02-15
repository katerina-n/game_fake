<?php

namespace Map\Game\Components;

use Map\Game\Units\Unit;

class Component extends Tile
{
    /** @var array  */
    protected $accessFor = [];

    /**
     * @param Unit $unit
     * @return bool
     */
    public function isAccessebleForUnit(Unit $unit):bool
    {
        return (bool)in_array(get_class($unit), $this->accessFor);
    }

}