<?php

namespace KeyTask\Classes\CloudFactory;

use KeyTask\Interfaces\PublicKeyInterface;

class CloudPublicKey implements PublicKeyInterface
{
    public function get()
    {
        return "Public key from Cloud";
    }
}