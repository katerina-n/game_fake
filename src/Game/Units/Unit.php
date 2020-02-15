<?php

namespace Map\Game\Units;

use Map\Game\Components\Tile;

class Unit extends Tile
{
    /** @var int */
    protected $healthPoint;
    /** @var int */
    protected $attackRange;
    /** @var int */
    protected $damage;
    /** @var int */
    protected $team;
    /** @var array  */
    protected $accessAttack = [];

    /**
     * @return int
     */
    public function getHelthPoints(): int
    {
        return $this->healthPoint;
    }

    /**
     * @return int
     */
    public function getAttackRange(): int
    {
        return $this->attackRange;
    }

    /**
     * @return int
     */
    public function getDamage(): int
    {
        return $this->damage;
    }


    /**
     * @return int
     */
    public function getTeam(): int
    {
        return $this->team;
    }

    /**
     * @param int $healthPoint
     * @return Unit
     */
    public function setHealthPoint(int $healthPoint): Unit
    {
        $this->healthPoint = $healthPoint;
        return $this;
    }

    /**
     * @param int $attackRange
     * @return Unit
     */
    public function setAttackRange(int $attackRange): Unit
    {
        $this->attackRange = $attackRange;
        return $this;
    }

    /**
     * @param int $damage
     * @return Unit
     */
    public function setDamage(int $damage): Unit
    {
        $this->damage = $damage;
        return $this;
    }

    /**
     * @param int $team
     * @return Unit
     */
    public function setTeam(int $team): Unit
    {
        $this->team = $team;
        return $this;
    }

    /**
     * @param Unit $unit
     * @return bool
     */
    public function isCanAttack(Unit $unit): bool
    {
        return (bool)(in_array(get_class($unit), $this->accessAttack) && $this->team != $unit->team);
    }
}