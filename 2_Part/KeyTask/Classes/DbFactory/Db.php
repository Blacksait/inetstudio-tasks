<?php

namespace KeyTask\Classes\DbFactory;

use KeyTask\Interfaces\KeyFactoryInterface;
use KeyTask\Interfaces\PublicKeyInterface;
use KeyTask\Interfaces\SecretKeyInterface;

class Db implements KeyFactoryInterface
{
    public function getPublicKey(): PublicKeyInterface
    {
        return new DbPublicKey();
    }

    public function getSecretKey(): SecretKeyInterface
    {
        return new DbSecretKey();
    }
}