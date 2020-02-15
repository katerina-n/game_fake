<?php

require __DIR__ . '/vendor/autoload.php';

$reader = new \Map\Game\Io\CliReader();
$writer = new \Map\Game\Io\CliWriter();

$game = new \Map\Game;

$game->start($reader, $writer);
