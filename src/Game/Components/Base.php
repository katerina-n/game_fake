<?php

namespace Map\Game\Components;

use Map\Game\Interfaces\Team;
use Map\Game\Interfaces\ViewSymbol;
use Map\Parameters;

class Base implements Team, ViewSymbol
{
    /** @var int */
    protected $team;
    /** @var Component */
    private $component;
    /** @var string */
    protected $viewSymbol = Parameters::VIEW_BASE;

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

    /**
     * @return string
     */
    public function getViewSymbol(): string
    {
        return $this->viewSymbol;
    }
}
