<?php
namespace MonProjet;
require 'autoload.php';

class Carte implements AfakaAtaoAnatyPortefeuille {
    public string $banque = '';
    function __construct(string $banque)
    {
        $this->banque = $banque;
    }
}