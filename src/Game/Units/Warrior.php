<?php

namespace Map\Game\Units;

class Warrior extends Unit
{
    /** @var int */
    protected $healthPoint = 100;
    /** @var int */
    protected $attackRange = 50;
    /** @var int */
    protected $damage = 10;
    /** @var array  */
    protected $accessAttack = [Tank::class, Warrior::class];
}