<?php

namespace KeyTask\Interfaces;

interface KeyFactoryInterface
{
    public function getPublicKey():PublicKeyInterface;
    public function getSecretKey():SecretKeyInterface;
}