<?php

namespace Map\Game\Components;

use Map\Game\Units\AirCraft;
use Map\Game\Units\Tank;
use Map\Parameters;

class Swamp extends Component
{
    protected $accessFor = [AirCraft::class, Tank::class];
    /** @var string */
    protected $viewSymbol = Parameters::VIEW_SWAMP;
}