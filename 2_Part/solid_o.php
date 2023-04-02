<?php

interface ObjectsInterface
{
    public function handle();
}

class SomeObject implements ObjectsInterface
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function handle()
    {
        return "handle_{$this->name}";
    }
}

class SomeObjectsHandler
{
    public function __construct()
    {
    }

    public function handleObjects(array $objects): array
    {
        $handlers = [];
        foreach ($objects as $object) {
            $handlers[] = $this->handleObject($object);
        }
        return $handlers;
    }

    public function handleObject(ObjectsInterface $object)
    {
        return $object->handle();
    }
}

$objects = [
    new SomeObject('object_1'),
    new SomeObject('object_2'),
    new SomeObject('object_3')
];

$soh = new SomeObjectsHandler();
$handlers = $soh->handleObjects($objects);
print_r($handlers);