<?php
class UnknowExtensionException extends ExtensionException
{
    public function __construct()
    {
        return parent::__construct('Les fichiers sans extension ne sont pas acceptés.');
    }
}
