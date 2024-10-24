<?php
class hewan {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function suara() {
        echo "{$this->nama} membuat suara. \n";
    }
}
?>