<?php

namespace KeyTask\Classes\FileFactory;

use KeyTask\Interfaces\SecretKeyInterface;

class FileSecretKey implements SecretKeyInterface
{
    public function get()
    {
        return "Secret key from file";
    }
}