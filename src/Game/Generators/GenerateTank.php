<?php

namespace Map\Game\Generators;

use Map\Game\Abstractions\GenerateUnit;
use Map\Game\Units\Tank;
use Map\Game\Units\Unit;

class GenerateTank extends GenerateUnit
{
    protected function makeUnit(): Unit
    {
        return new Tank();
    }
}