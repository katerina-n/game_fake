<?php

namespace Map\Game\Interfaces;

interface Type
{
    function getType() : string;
    function setType($type) : Type;
}