<?php

namespace KeyTask\Classes\RedisFactory;

use KeyTask\Interfaces\KeyFactoryInterface;
use KeyTask\Interfaces\PublicKeyInterface;
use KeyTask\Interfaces\SecretKeyInterface;

class Redis implements KeyFactoryInterface
{
    public function getPublicKey(): PublicKeyInterface
    {
        return new RedisPublicKey();
    }

    public function getSecretKey(): SecretKeyInterface
    {
        return new RedisSecretKey();
    }
}