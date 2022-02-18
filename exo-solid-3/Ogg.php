<?php

require_once 'MusicType.php';

class Ogg extends MusicType
{
    public function listen(): string
    {
        $extension = pathinfo($this->filename, PATHINFO_EXTENSION);

        if ($extension !== 'ogg') {
            throw new InvalidExtensionException("ogg", $extension);
        }

        return 'Lecture du fichier Ogg ' . $this->filename;
    }
}
