<?php

namespace Map\Game\Components;

use Map\Game\Units\AirCraft;
use Map\Game\Units\Warrior;
use Map\Parameters;

class Sea extends Component
{
    protected $accessFor = [AirCraft::class, Warrior::class];
    /** @var string */
    protected $viewSymbol = Parameters::VIEW_SEA;
}