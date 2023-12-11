<?php
require 'autoload.php';

class Portefeuille {
    private array $contenu = [];

    public function addItem(AfakaAtaoAnatyPortefeuille $item) {
        $this->contenu[] = $item;
    }
}