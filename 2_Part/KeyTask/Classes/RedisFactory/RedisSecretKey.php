<?php

namespace KeyTask\Classes\RedisFactory;

use KeyTask\Interfaces\SecretKeyInterface;

class RedisSecretKey implements SecretKeyInterface
{
    public function get()
    {
        return "Secret key from Redis";
    }
}