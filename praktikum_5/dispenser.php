<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function isi($vol)
    {
        $this->volume = $vol;
    }

    public function isi_ulang_dispenser($vol)
    {
        $this->volume = $this->volume + $vol;
    }

    public function harga($harga)
    {
        $this->hargaSegelas = $harga;

        echo "<br>Harga Segelas Rp.".$this->hargaSegelas.",-";
    }

    public function beli($nama, $vol)
    {
        $this->namaMinuman = $nama;
        $this->volumeGelas = $vol;
        $this->volume = $this->volume - $this->volumeGelas;
        echo "<br>Nama Minuman: ".$this->namaMinuman;
        echo "<br>Volume Minuman: ".$this->volumeGelas;
    }

    public function cetak_isi_dispenser(){
        echo "Isi Dispenser ".$this->volume."ml";
    }
}

$dispenser = new Dispenser();

echo "<br><b>ISI AWAL DISPENSER 250ML</b><br>";
$dispenser->isi(1000);
$dispenser->cetak_isi_dispenser();

echo "<br><br><b>BELI MINUMAN</b>";
$dispenser->beli("ES BUAH", 250);
$dispenser->harga(5000);


?>