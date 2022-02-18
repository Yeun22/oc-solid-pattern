<?php

require('MusicTypeInterface.php');
require('InvalidExtensionException.php');
require('UnknowExtensionException.php');
abstract class MusicType implements MusicTypeInterface
{
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }
    abstract public function listen(): string;
}
