<?php
require 'autoload.php';
use MonProjet\Vola;
use MonProjet\Personne;
use MonProjet\Portefeuille;
use MonProjet\Cin;
use MonProjet\Carte;
use MonProjet\AfakaAtaoAnatyPortefeuille;

$v100 = new Vola(100);
$v200 = new Vola(200);
$v500 = new Vola(500);
$v1000 = new Vola(1000);

$carte = new Carte('BOA');
$cin = new CIN('11111111111111');

$moi = new Personne();
$moi->giveItem($v100);
$moi->giveItem($v200);
$moi->giveItem($carte);
$moi->giveItem($cin);

var_dump($moi);