<?php

namespace Map\Game\Units;

use Map\Parameters;

class AirCraft extends Unit
{
    /** @var int */
    protected $healthPoint = Parameters::AIR_CRAFT_HEALTH_POINT;
    /** @var int */
    protected $attackRange = Parameters::AIR_CRAFT_ATTACK_RANGE;
    /** @var int */
    protected $damage = Parameters::AIR_CRAFT_DAMAGE;
    /** @var array  */
    protected $accessAttack = [Tank::class];
}