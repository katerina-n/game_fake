<?php

namespace Map\Game\Components;

use Map\Game\Units\AirCraft;
use Map\Game\Units\Warrior;

class Sea extends Component
{
    protected $accessFor = [AirCraft::class, Warrior::class];
}