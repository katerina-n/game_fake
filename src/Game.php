<?php

namespace Map;

use Map\Game\Builder\BuildBaseWithUnits;
use Map\Game\Builder\BuildComponents;
use Map\Game\Collections\Map;
use Map\Game\Components\Plate;
use Map\Game\Contracts\Io\Writer;
use Map\Game\Generators\GenerateTiles;

class Game
{
    /**
     * @param Writer $writer
     * @throws \Exception
     */
    public function start(Writer $writer): void
    {
        $writer->writeln("Map generator...");

        $this->run($writer);

    }

    /**
     * @param Writer $writer
     * @throws \Exception
     */
    public function run(Writer $writer): void
    {
        $widht = rand(Parameters::MIN_MAP_SIZE, Parameters::MAX_MAP_SIZE);
        $height = rand(Parameters::MIN_MAP_SIZE, Parameters::MAX_MAP_SIZE);
        $map = new Map($widht,$height);

        $generateTiles = new GenerateTiles();
        $tiles = $generateTiles->generateOnMap($map);

        $map->pushTiles($tiles);

        $buildComponents = new BuildComponents();
        $map = $buildComponents->buildComponents($map);
        $plates = $map->getComponentsByType(get_class(new Plate));
        $randomKey = array_rand($plates, 2);

        $buildBaseWithUnits = new BuildBaseWithUnits();
        $map = $buildBaseWithUnits->buildBaseWithUnits($map, $plates[$randomKey[0]],Parameters::TEAM_1);
        $map = $buildBaseWithUnits->buildBaseWithUnits($map, $plates[$randomKey[1]],Parameters::TEAM_2);

        $writer->writeln($map);
    }

}
