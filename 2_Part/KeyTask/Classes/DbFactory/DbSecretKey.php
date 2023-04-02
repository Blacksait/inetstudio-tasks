<?php

namespace KeyTask\Classes\DbFactory;

use KeyTask\Interfaces\SecretKeyInterface;

class DbSecretKey implements SecretKeyInterface
{
    public function get()
    {
        return "Secret key from DB";
    }
}