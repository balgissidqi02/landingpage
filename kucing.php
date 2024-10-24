<?php
// class kucing extends hewan {

//     public function keadaan() {
//         return "suara: " . $this->suara . ", Nama : " .  $this->nama;
//     }
// }

// $kucing_baru = new kucing("nailah");
// $kucing_baru->suara =  "lah lapo seh";

// echo $kucing_baru->suara();
// echo "<br />";
// echo $kucing_baru->nama();
require_once 'hewan.php';

class kucing extends hewan {
    public function suara() {
        echo "{$this->nama} membuat suara: lah lpo seh! \n";
    }
}
$kucing = new hewan("kucing");
$kucing->suara();
?>