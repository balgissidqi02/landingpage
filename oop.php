<?php
class air {
    public $merk;
    public $rasa;
    public $expired;

    public function infoair() {
        return "Air ini adalah $this->merk, memiliki rasa yang $this->rasa, dan tidak layak konsumsi pada $this->expired";
    }
    public function macamair() {
        return "Air sangat bermacam-macam salah satunya ialah air $this->merk sebagai air minum, selain itu ada juga air
        yang digunakan untuk mandi, mencuci dan lain sebagainya";
    }
}

$air1 = new air();

$air1->merk = "cheers";
$air1->rasa = "manis";
$air1->expired = "2030";

echo $air1->infoair();
?>