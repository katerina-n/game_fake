<?php

namespace Map\Game\Units;

use Map\Parameters;

class Warrior extends Unit
{
    /** @var int */
    protected $healthPoint = Parameters::WARRIOR_HEALTH_POINT;
    /** @var int */
    protected $attackRange = Parameters::WARRIOR_ATTACK_RANGE;
    /** @var int */
    protected $damage = Parameters::WARRIOR_DAMAGE;
    /** @var array  */
    protected $accessAttack = [Tank::class, Warrior::class];
}