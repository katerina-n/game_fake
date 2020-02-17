<?php

namespace Map\Game\Generators;

use Map\Game\Abstractions\GenerateUnit;
use Map\Game\Units\AirCraft;
use Map\Game\Units\Unit;

class GenerateAirCraft extends GenerateUnit
{
    protected function makeUnit(): Unit
    {
        return new AirCraft();
    }
}