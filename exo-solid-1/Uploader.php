<?php

require('FilesInformation.php');
require('ValidExtensionDetector.php');

class Uploader
{
    private $name;
    private $type;
    public $directory = '';
    public $validTypes = [];

    public function __construct($file)
    {
        $fileData = $_FILES[$file];
        $this->temporaryName = $fileData['tmp_name'];
        $this->name = $fileData['name'];
        $this->type = $fileData['type'];
        $this->validTypes = ['PNG', 'png', 'jpeg', 'jpg', 'JPG'];
    }

    public function uploadFile()
    {
        $validExtension = new ValidExtensionDetector();
        $result = $validExtension->checkExtension($this->getExtension(), $this->validTypes);
        if (!$result) {
            $this->error = 'Le fichier ' . $this->name . ' n\'est pas d\'un type valide';
        }
        return $result;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getExtension()
    {
        $fileInformation = new FilesInformation();
        return $fileInformation->getExtension($this->name);
    }

    public function resize($origin, $destination, $width, $maxHeight)
    {
        $imgResizer = new ImgResizer();
        $imgResizer->resize($this->getExtension(), $origin, $destination, $width, $maxHeight);
    }
}
