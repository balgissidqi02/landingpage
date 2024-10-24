<?php
require_once 'hewan.php';

class anjing extends hewan {
    public function suara() {
        echo "{$this->nama} membuat suara: Guk! \n";
    }
}
$anjing = new hewan("anjing");
$anjing->suara();
?>