<?php

namespace Map\Game\Components;

use Map\Game\Interfaces\Builder;

class Base extends Tile implements Builder
{
    /** @var int */
    protected $team;
}
