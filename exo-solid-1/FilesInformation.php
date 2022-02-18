<?php

class FilesInformation
{
    public function getExtension($name)
    {
        return pathinfo($name, PATHINFO_EXTENSION);
    }
}
