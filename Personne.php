<?php
require 'autoload.php';

class Personne {
    public string $name = '';
    public Portefeuille $protefeuille;

    function __construct()
    {
       $this->protefeuille = new Portefeuille();
    }

    public function giveItem(AfakaAtaoAnatyPortefeuille $item) {
        $this->protefeuille->addItem($item);
    }
    public function display() {
        print_r($this);
    }
}