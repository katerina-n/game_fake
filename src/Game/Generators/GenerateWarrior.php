<?php

namespace Map\Game\Generators;

use Map\Game\Abstractions\GenerateUnit;
use Map\Game\Units\Unit;
use Map\Game\Units\Warrior;

class GenerateWarrior extends GenerateUnit
{
    public function makeUnit(): Unit
    {
        return new Warrior();
    }
}