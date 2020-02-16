<?php

namespace Map\Game\Io;

use Map\Game\Contracts\Io\Reader;

class CliReader implements Reader
{
    private $stream;

    public function __construct()
    {
        $this->stream = STDIN;
    }

    public function read(): string
    {
        return fgets($this->stream);
    }
}
