<?php

namespace Map;

use Map\Game\Collections\Map;
use Map\Game\Components\Plate;
use Map\Game\Contracts\Io\Reader;
use Map\Game\Contracts\Io\Writer;
use Map\Game\Generators\GenerateSea;

class Game
{
    /**
     * @var Storage
     */
    public $storage;

    /**
     * Game constructor.
     */
    public function __construct()
    {
        $this->storage = new Storage();
    }

    /**
     * @param Reader $reader
     * @param Writer $writer
     */
    public function start(Reader $reader, Writer $writer): void
    {
        $writer->writeln("Hi, engineer! Let's build spaceship");

        //while (true) {
            $this->run($reader, $writer);
        //}
    }

    /**
     * @param Reader $reader
     * @param Writer $writer
     */
    public function run(Reader $reader, Writer $writer): void
    {
        $writer->write('Input :> ');
        $map = new Map();
        $sea = new GenerateSea();
        $sea1 = $sea->generateOnMap($map);

        $map->push($sea1->getTile());
        $sea2 = $sea->generateOnMap($map);
        $map->push($sea2->getTile());
        print_r($map);

    }
}
