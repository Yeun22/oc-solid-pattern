<?php

class OggType extends MusicType
{
    public function listen()
    {
        $validator = new ValidExtensionDetector();
        if ($validator->checkExtension($this->filename, 'ogg')) {
            return 'Lecture du fichier Ogg ' . $this->filename;
        } else {
            return "Le fichier envoyé n'a pas le bon format";
        }
    }
}
