<?php

class PersegipanjangPilihan
{
    public function Luas($panjang, $lebar)
    {
        echo 'Luas : ' . ($panjang * $lebar);
    }

    public function Keliling($panjang, $lebar)
    {
        echo 'Keliling : ' . (2 * (($panjang + $lebar)));
    }

    public function noChoice($panjang, $lebar)
    {
        echo 'Anda tidak memilih.';
    }

    public function tendensiSentralUntuk($tendensiSentral, $panjang, $lebar)
    {
        switch ($tendensiSentral) {
            case 'Luas':
            $this->Luas($panjang, $lebar);
            case 'Keliling':
            $this->Keliling($panjang, $lebar);
            default:
            $this->noChoice($panjang, $lebar);
        }
    }
}

$panjang = 20;
$lebar = 10;
$tendensiSentral = new PersegipanjangPilihan;
$tendensiSentral->tendensiSentralUntuk('Luas', $panjang, $lebar);
