<?php

namespace Map\Game\Io;

use Map\Game\Contracts\Io\Writer;

class CliWriter implements Writer
{
    private $stream;

    public function __construct()
    {
        $this->stream = STDOUT;
    }

    public function writeln(string $string)
    {
        fputs($this->stream, $string . PHP_EOL);
    }

    public function write(string $string)
    {
        fputs($this->stream, $string);
    }

    public function getStream()
    {
        return $this->stream;
    }
}
