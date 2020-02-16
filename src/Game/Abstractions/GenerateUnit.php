<?php

namespace Map\Game\Abstractions;

use Map\Game\Components\Component;
use Map\Game\Units\Unit;

abstract class GenerateUnit
{
    abstract function makeUnit() : Unit;

    /**
     * @param Component $component
     * @param $team
     * @return Unit
     */
    public function generateOnComponent(Component $component, $team): Unit
    {
        $unit = $this->makeUnit();
        $unit->setTeam($team);
        $unit->setType(get_class($unit));
        $unit->setComponent($component);
        return $unit;
    }

}