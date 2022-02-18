<?php

interface MusicTypeInterface
{
    public function getFilename(): string;

    public function listen(): string;
}
