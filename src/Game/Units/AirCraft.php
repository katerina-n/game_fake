<?php

namespace Map\Game\Units;

class AirCraft extends Unit
{
    /** @var int */
    protected $healthPoint = 1000;
    /** @var int */
    protected $attackRange = 3000;
    /** @var int */
    protected $damage = 100;
    /** @var array  */
    protected $accessAttack = [Tank::class];
}