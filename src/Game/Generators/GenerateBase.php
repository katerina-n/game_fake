<?php

namespace Map\Game\Generators;

use Map\Game\Components\Base;
use Map\Game\Components\Plate;

class GenerateBase
{
    /**
     * @return Base
     */
    private function makeBase() : Base
    {
        return new Base();
    }


    /**
     * @param Plate $plate
     * @param $team
     * @return Base
     */
    public function generateOnComponent(Plate $plate, $team) : Base
    {
        $base = $this->makeBase();
        $base->setComponent($plate);
        $base->setTeam($team);

        return $base;
    }
}