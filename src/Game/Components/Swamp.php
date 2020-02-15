<?php

namespace Map\Game\Components;

use Map\Game\Units\AirCraft;
use Map\Game\Units\Tank;

class Swamp extends Component
{
    protected $accessFor = [AirCraft::class, Tank::class];
}