<?php
namespace MonProjet;
require 'autoload.php';
use MonProjet\AfakaAtaoAnatyPortefeuille;

class Carte implements AfakaAtaoAnatyPortefeuille {
    public string $banque = '';
    function __construct(string $banque)
    {
        $this->banque = $banque;
    }
}