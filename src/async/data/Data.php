<?php

namespace async\data;

use async\Core;
use pocketmine\utils\Config;

class Data extends Config
{
    private static ?self $data = null;

    public function __construct(string $pathFile, array $default = [])
    {
        parent::__construct(Core::getInstance()->getDataFolder().$pathFile, self::JSON, $default);
    }

    protected static function getData(string $id):mixed
    {
        return !is_null(self::$data) ? self::$data->get($id) : 'NaN';
    }

    public static function setData(string $id, mixed $values):void
    {
        self::$data->set($id, $values);
        self::$data->save();
    }
}