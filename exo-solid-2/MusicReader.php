<?php

// // Si on doit supporter un nouveau type de format, on doit modifier cette classe :(
// require_once 'Mp3.php';
// require_once 'Ogg.php';

class MusicReader
{
    private $musicType;

    public function __construct(MusicType $musicType)
    {
        $this->musicType = $musicType;
    }

    public function listen()
    {
        return $this->musicType->listen();
    }
}
