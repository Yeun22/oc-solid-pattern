<?php
require('ExtensionException.php');
class InvalidExtensionException extends ExtensionException
{
    public function __construct($expected, $received)
    {
        $message = sprintf(
            'Fichier %s attendu mais "%s" obtenu',
            $expected,
            $received
        );

        return parent::__construct($message);
    }
}
