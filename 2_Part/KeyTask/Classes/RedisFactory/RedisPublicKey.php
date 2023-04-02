<?php

namespace KeyTask\Classes\RedisFactory;

use KeyTask\Interfaces\PublicKeyInterface;

class RedisPublicKey implements PublicKeyInterface
{
    public function get()
    {
        return "Public key from Redis";
    }
}