<?php

class Latihan
{
    private $DISKON = 50000;
    // POTONGAN DISKON 10%
    private $JUMLAH_DISKON = 0.1;

    /**
     * Mencetak Struk berasal dari struk yg layak diskon hingga keterangan mendapatkan jumlah diskon
     * Parameter: $arrBelanjaan
     * Return: array 
     */
    function filterStruk($arrBelanjaan)
    {
        $arrBelanjaan =  $this->filterStrukYangLayakDapatDiskon($arrBelanjaan);
        return array_map(array($this, "getDiskon"), $arrBelanjaan);
    }

    /**
     * Memilah elemen array yang layak dapat diskon sesuai kriteria yang diterapkan pada function strukDiskon
     * Parameter: $arrBelanjaan
     * Return: array 
     */
    function filterStrukYangLayakDapatDiskon($arrBelanjaan)
    {
        return array_filter($arrBelanjaan, array($this, "strukDiskon"));
    }

    /**
     * Rule pemilahan elemen array yang layak dapat diskon
     * Parameter: $arrBelanjaan
     * Return: array
     */
    protected function strukDiskon($arrBelanjaan)
    {
        if ($arrBelanjaan['jumlahBelanja'] > $this->DISKON) {
            return $arrBelanjaan;
        }
    }

    /**
     * menghitung jumnla diskon yg didaapat
     * Parameter: $arrBelanjaan
     * Return: array 
     */
    protected function getDiskon($arrBelanjaan)
    {
        $totalDiskon = $arrBelanjaan['jumlahBelanja'] * $this->JUMLAH_DISKON;
        $arrBelanjaan['diskon'] = $totalDiskon;
        return ($arrBelanjaan);
    }
}

$arrBelanjaan = array(
    array('nomorStruk' => 1, 'jumlahBelanja' => 77400),
    array('nomorStruk' => 2, 'jumlahBelanja' => 19000),
    array('nomorStruk' => 3, 'jumlahBelanja' => 49890),
    array('nomorStruk' => 4, 'jumlahBelanja' => 109000),
    array('nomorStruk' => 5, 'jumlahBelanja' => 56000),
);

$coba = new Latihan;
print_r($coba->filterStruk($arrBelanjaan));