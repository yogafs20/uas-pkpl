<?php
// Kasus Pendaftaran KKN
class DO
{
    function isJumlahSks($status)
    {
        if ($status < 100) {
            return TRUE;
        }
    }

    function ismatkul($status)
    {
        if ($status < 35) {
            return TRUE;
        }
    }

    function isipk($status)
    {
        if ($status < 2) {
            return TRUE;
        }
    }

    #Nested If After Refactored
    function main($statusSks, $statusmatkul, $statusipk)
    {
        if ($this->isJumlahSks($statusSks) == TRUE) {
            return 'SKS Anda Belum Mencukupi, Kuliah Lagi YA!';
        }
        if ($this->ismatkul($statusmatkul) == TRUE) {
            return 'matkul Anda Belum Mencukupi, Kuliah Lagi YA!';
        }
        if ($this->isTbq($statusipk) == TRUE) {
            return 'IPK Anda Belum Mencukupi, Kuliah Lagi YA!';
        }

        return 'Selamat Anda Berhasil Tidak DI DO';
    }
}

$do = new DO;
$withdrawl = $do->main(112, 50, 3);
echo $withdrawl;
