<?php

namespace KeyTask\Classes\CloudFactory;

use KeyTask\Interfaces\SecretKeyInterface;

class CloudSecretKey implements SecretKeyInterface
{
    public function get()
    {
        return "Secret key from Cloud";
    }
}