<?php

namespace Map\Game\Units;

use Map\Game\Components\Component;
use Map\Game\Interfaces\Team;
use Map\Game\Interfaces\Type;
use Map\Game\Interfaces\ViewSymbol;

class Unit implements Type, Team, ViewSymbol
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

    /** @var string */
    protected $type;

    /** @var Component */
    private $component;
    /** @var string */
    protected $viewSymbol;

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type) : Type
    {
        $this->type = $type;

        return $this;
    }

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
     * @param Unit $unit
     * @return bool
     */
    public function isCanAttack(Unit $unit): bool
    {
        return (bool)(in_array(get_class($unit), $this->accessAttack) && $this->team != $unit->team);
    }

    /**
     * @return int
     */
    public function getTeam() : int
    {
        return $this->team;
    }

    /**
     * @param $team
     * @return Team
     */
    public function setTeam($team) : Team
    {
        $this->team = $team;

        return $this;
    }

    /**
     * @param Component $component
     * @return $this
     */
    public function setComponent(Component $component)
    {
        $this->component = $component;

        return $this;
    }

    /**
     * @return Component
     */
    public function getComponent()
    {
        return $this->component;
    }
    /**
     * @return string
     */
    public function getViewSymbol(): string
    {
        return $this->viewSymbol;
    }

}