<?php
namespace MonProjet;
require 'autoload.php';
use MonProjet\AfakaAtaoAnatyPortefeuille;

class Vola implements AfakaAtaoAnatyPortefeuille {
    private int $value = 0;
    
    function __construct(int $value)
    {
       $this->value = $value;
    }

    public function  setVola(int $value) {
        if ($value < 0) {
            throw new Exception("Negatif");
        }
        if (is_int($value)) {
            throw new Exception("Pas un entier");
        }
        $this->value;
    }
}