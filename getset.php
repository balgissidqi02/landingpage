<?php
class mobil {
    private string $merk;
    private string $wara;
    private string $tahunproduksi;

    // getter untuk atribut $merk
    public function getmerk(){
        return $this->merk;
    }

    // setter untuk atribut $merk
    public function setmerk(string $merk){
        $this->merk = $merk;
    }
}
?>