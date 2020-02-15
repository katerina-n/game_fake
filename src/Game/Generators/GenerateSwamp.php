<?php

namespace Map\Game\Generators;

use Map\Game\Abstractions\GenerateComponent;
use Map\Game\Components\Component;
use Map\Game\Components\Swamp;

class GenerateSwamp extends GenerateComponent
{
    public function makeComponent(): Component
    {
        return new Swamp();
    }
}