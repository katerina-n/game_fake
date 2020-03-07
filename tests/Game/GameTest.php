<?php

namespace MapTest\Game;

use Map\Game\Collections\Map;
use Map\Game\Components\Tile;
use Map\Game\Generators\GenerateTiles;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{

//    public function testRun()
//    {
//        $map = $this->createMock(Map::class)
//            ->method('construct')
//            ->with($this->equalTo(10), $this->equalTo(10));
//        $this->assertTrue(is_a($map, Map::class));
//    }

    public function testGenerateOnMap()
    {
        $map = $this->getMockBuilder(Map::class)
            ->disableOriginalConstructor()
            ->getMock();

        $tile = $this->getMockBuilder(Tile::class)
            ->disableOriginalConstructor()
            ->getMock();

        $generateTiles = $this->getMockBuilder(GenerateTiles::class)
            ->setMethods(['tilesArray'])
            ->getMock();

        $generateTiles->expects($this->once())
            ->method('tilesArray')
            ->will($this->returnValue([$tile]));

        $this->assertTrue(is_array($generateTiles->generateOnMap($map)));
    }

    public function testBuildBaseWithUnits()
    {
        $map = $this->getMockBuilder(Map::class)
            ->disableOriginalConstructor()
            ->getMock();


    }
}