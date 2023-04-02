<?php

namespace KeyTask\Classes\CloudFactory;

use KeyTask\Interfaces\KeyFactoryInterface;
use KeyTask\Interfaces\PublicKeyInterface;
use KeyTask\Interfaces\SecretKeyInterface;

class Cloud implements KeyFactoryInterface
{
    public function getPublicKey(): PublicKeyInterface
    {
        return new CloudPublicKey();
    }

    public function getSecretKey(): SecretKeyInterface
    {
        return new CloudSecretKey();
    }
}