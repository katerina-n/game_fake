<?php

namespace Map\Game\Units;

class Tank extends Unit
{
    /** @var int */
    protected $healthPoint = 500;
    /** @var int */
    protected $attackRange = 800;
    /** @var int */
    protected $damage = 50;
    /** @var array  */
    protected $accessAttack = [Tank::class, Warrior::class];
}