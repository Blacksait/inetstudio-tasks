<?php

namespace KeyTask\Classes;

use KeyTask\Classes\CloudFactory\Cloud;
use KeyTask\Classes\DbFactory\Db;
use KeyTask\Classes\FileFactory\File;
use KeyTask\Classes\RedisFactory\Redis;
use KeyTask\Interfaces\KeyFactoryInterface;

class KeyFactory
{
    /**
     * @throws \Exception
     */
    public function getFactory($type):KeyFactoryInterface
    {
        switch ($type){
            case "File":
                $factory = new File();
                break;
            case "DB":
                $factory = new Db();
                break;
            case "Redis":
                $factory = new Redis();
                break;
            case "Cloud":
                $factory = new Cloud();
                break;
            default:
                throw new \Exception("Invalid factory: {$type}");
        }
        return $factory;
    }
}