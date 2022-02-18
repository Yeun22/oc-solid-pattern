<?php

//Check if we accept extension of file
class ValidExtensionDetector
{
    public function checkExtension(string $extension, array $validExtensions)
    {
        if (in_array($extension, $validExtensions)) {
            return true;
        } else {
            return false;
        }
    }
}
