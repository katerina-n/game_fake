<?php

namespace Map\Game\Generators;

use Map\Game\Abstractions\GenerateComponent;
use Map\Game\Components\Component;
use Map\Game\Components\Plate;

class GeneratePlate extends GenerateComponent
{
    protected function makeComponent(): Component
    {
        return new Plate();
    }
}