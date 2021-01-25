<?php

interface PersegipanjangInterface
{
    public function tendensiSentral($panjang, $lebar);
}

class Luas implements PersegipanjangInterface
{
    public function tendensiSentral($panjang, $lebar)
    {
        echo 'Luas : ' . ($panjang * $lebar);
    }
}

class Keliling implements PersegipanjangInterface
{
    public function tendensiSentral($panjang, $lebar)
    {
        echo 'Keliling : ' . (2 * (($panjang + $lebar)));
    }
}

class NoTendensiSentral implements PersegipanjangInterface
{
    public function tendensiSentral($panjang, $lebar)
    {
        echo 'Anda tidak memilih.';
    }
}

class BalokPilihan
{
    public static function tendensiSentralUntuk($tendensiSentral)
    {
        switch ($tendensiSentral) {
            case 'Luas':
            return new Luas;
            case 'Keliling':
            return new Keliling;
            default:
            return new NoTendensiSentral;
        }
    }
}

$panjang = 20;
$lebar = 10;
PersegipanjangPilihan::tendensiSentralUntuk('Luas')->tendensiSentral($panjang, $lebar);
echo '<br>';
PersegipanjangPilihan::tendensiSentralUntuk('Keliling')->tendensiSentral($panjang, $lebar);
