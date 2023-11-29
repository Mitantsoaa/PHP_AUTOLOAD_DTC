<?php
namespace MonProjet;
require 'autoload.php';
use MonProjet\AfakaAtaoAnatyPortefeuille;

class CIN implements AfakaAtaoAnatyPortefeuille{
    public string $numero = '';
    function __construct(string $numero)
    {
        $this->numero = $numero;
    }
}