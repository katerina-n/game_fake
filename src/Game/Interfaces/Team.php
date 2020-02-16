<?php

namespace Map\Game\Interfaces;

interface Team
{
    function getTeam() : int;
    function setTeam($team) : Team;
}