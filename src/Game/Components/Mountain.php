<?php

namespace Map\Game\Components;

use Map\Game\Units\AirCraft;
use Map\Game\Units\Warrior;

class Mountain extends Component
{
    protected $accessFor = [AirCraft::class, Warrior::class];
}
