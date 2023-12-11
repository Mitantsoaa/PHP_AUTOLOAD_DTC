<?php
require 'autoload.php';

class CIN implements AfakaAtaoAnatyPortefeuille{
    public string $numero = '';
    function __construct(string $numero)
    {
        $this->numero = $numero;
    }
}