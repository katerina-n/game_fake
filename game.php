<?php

require __DIR__ . '/vendor/autoload.php';

$writer = new \Map\Game\Io\CliWriter();

$game = new \Map\Game;

$game->start($writer);
