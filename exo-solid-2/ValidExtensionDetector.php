<?php

require('FileInformation.php');
//Check if we accept extension of file
class ValidExtensionDetector
{

    public function checkExtension(string $filename, string $extensionAccepted)
    {
        $fileInfo = new FileInformation();

        $extension = $fileInfo->getExtension($filename);

        if ($extension === $extensionAccepted) {
            return true;
        } else {
            return false;
        }
    }
}
