<?php

namespace Map\Game\Components;

use Map\Game\Units\AirCraft;
use Map\Game\Units\Tank;
use Map\Game\Units\Warrior;
use Map\Parameters;

class Plate extends Component
{
    protected $accessFor = [AirCraft::class, Tank::class, Warrior::class];
    /** @var string */
    protected $viewSymbol = Parameters::VIEW_PLATE;

}