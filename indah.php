<?php
require_once 'kucing.php';
require_once 'anjing.php';

$kucing = new Kucing("kucing");
$kucing->suara();

$anjing = new Anjing("anjing");
$anjing->suara();
?>