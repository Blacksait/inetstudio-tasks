<?php

namespace KeyTask\Classes\DbFactory;

use KeyTask\Interfaces\PublicKeyInterface;

class DbPublicKey implements PublicKeyInterface
{
    public function get()
    {
        return "Public key from DB";
    }
}