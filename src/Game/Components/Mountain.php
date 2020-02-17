<?php

namespace Map\Game\Components;

use Map\Game\Units\AirCraft;
use Map\Game\Units\Warrior;
use Map\Parameters;

class Mountain extends Component
{
    protected $accessFor = [AirCraft::class, Warrior::class];

    /** @var int */
    private $height;
    /** @var string */
    protected $viewSymbol = Parameters::VIEW_MOUNTAIN;

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return $this
     */
    public function setHeight(int $height) : Mountain
    {
        $this->height = $height;
        return $this;
    }

}
