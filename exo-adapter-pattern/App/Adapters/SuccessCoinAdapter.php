<?php

require_once './OC/SuccessCoin.php';
require_once './App/CryptoCurrency.php';

// @TODO 1: Inclure et implémenter l'interface CryptoCurrency
class SuccessCoinAdapter implements CryptoCurrency
{
    private $coin;

    public function __construct(SuccessCoin $successCoin)
    {
        // @TODO 2 : Inclure la classe SuccessCoin
        $this->coin = $successCoin;
    }

    public function getName(): string
    {
        // @TODO 3 : Récupérer le nom de la crypto monnaie à partir de la classe d'OpenClassrooms ?
        return $this->coin::NAME;
    }

    public function getPrice(): string
    {
        // @TODO 4 : Convertir dans le bon format
        $dollarsPrice = $this->coin->getValue();
        $euroPrice = $dollarsPrice * 1.20;
        return "$euroPrice €";
    }
}
