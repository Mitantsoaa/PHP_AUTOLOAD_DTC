<?php
require 'autoload.php';
use MonProjet\AfakaAtaoAnatyPortefeuille;
use MonProjet\Portefeuille;
use MonProjet\Personne;
use MonProjet\Vola;


$v100 = new Vola(100);
$v200 = new Vola(200);
$v500 = new Vola(500);
$v1000 = new Vola(1000);

$moi = new Personne();
$moi->giveItem($v100);
$moi->giveItem($v200);
$moi->giveItem($carte);
$moi->giveItem($cin);