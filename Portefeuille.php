<?php
namespace MonProjet;
require 'autoload.php';
use MonProjet\AfakaAtaoAnatyPortefeuille;

class Portefeuille {
    private array $contenu = [];

    public function addItem(AfakaAtaoAnatyPortefeuille $item) {
        $this->contenu[] = $item;
    }
}