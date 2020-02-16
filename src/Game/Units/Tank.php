<?php

namespace Map\Game\Units;

use Map\Parameters;

class Tank extends Unit
{
    /** @var int */
    protected $healthPoint = Parameters::TANK_HEALTH_POINT;
    /** @var int */
    protected $attackRange = Parameters::TANK_ATTACK_RANGE;
    /** @var int */
    protected $damage = Parameters::TANK_DAMAGE;
    /** @var array  */
    protected $accessAttack = [Tank::class, Warrior::class];
}