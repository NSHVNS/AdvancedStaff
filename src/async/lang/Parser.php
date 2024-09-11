<?php
namespace async\lang;

use async\consts\Files;
use async\data\Data;
use async\traits\DataFiles;
use async\traits\Format;

class Parser extends Data
{
    use DataFiles;
    use Format;

    public function __construct()
    {
        parent::__construct(Files::Config, self::getConfig());
    }

    public static function parseString(string $id):string
    {
        return str_replace(array_keys(self::getFormat()),array_values(self::getFormat()),self::getData($id));
    }
}