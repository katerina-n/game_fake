<?php

namespace Map\Game\Components;

use Map\Game\Interfaces\Team;

class Base implements Team
{
    /** @var int */
    protected $team;
    /** @var Component */
    private $component;

    /**
     * @return int
     */
    public function getTeam() : int
    {
        return $this->team;
    }

    /**
     * @param $team
     * @return Base
     */
    public function setTeam($team) : Team
    {
       $this->team = $team;

       return $this;
    }

    /**
     * @return Component
     */
    public function getComponent() : Component
    {
        return $this->component;
    }

    /**
     * @param Component $component
     * @return $this
     */
    public function setComponent(Component $component) : Base
    {
        $this->component = $component;

        return $this;
    }
}
