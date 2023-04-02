<?php

namespace KeyTask\Classes\FileFactory;

use KeyTask\Interfaces\PublicKeyInterface;

class FilePublicKey implements PublicKeyInterface
{
    public function get()
    {
        return "Public key from file";
    }
}