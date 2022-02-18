<?php

require('MusicType.php');
require('ValidExtensionDetector.php');

class Mp3Type extends MusicType
{

    public function listen()
    {
        $validator = new ValidExtensionDetector();
        if ($validator->checkExtension($this->filename, 'mp3')) {
            return 'Lecture du fichier Mp3 ' . $this->filename;
        } else {
            return "Le fichier envoyé n'a pas le bon format";
        }
    }
}
