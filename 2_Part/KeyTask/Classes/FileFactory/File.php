<?php

namespace KeyTask\Classes\FileFactory;

use KeyTask\Interfaces\KeyFactoryInterface;
use KeyTask\Interfaces\PublicKeyInterface;
use KeyTask\Interfaces\SecretKeyInterface;

class File implements KeyFactoryInterface
{

    public function getPublicKey(): PublicKeyInterface
    {
        return new FilePublicKey();
    }

    public function getSecretKey(): SecretKeyInterface
    {
        return new FileSecretKey();
    }
}