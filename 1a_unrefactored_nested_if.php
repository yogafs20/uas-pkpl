<?php
// Kasus Pendaftaran KKN
class DO
{
    function isJumlahSks($status)
    {
        if ($status >= 100) {
            return TRUE;
        }
    }

    function ismatkul($status)
    {
        if ($status >= 35) {
            return TRUE;
        }
    }

    function isipk($status)
    {
        if ($status >= 2) {
            return TRUE;
        }
    }

    #Nested if before refactor
    function main($statusSks, $statusmatkul, $statusipk)
    {
        if ($this->isJumlahSks($statusSks) == TRUE) {
            if ($this->ismatkul($statusmatkul) == TRUE) {
                if ($this->isipk($statusipk) == TRUE) {
                    return 'Selamat Anda Berhasil Mendaftar KKN';
                } else {
                    return 'IPK Anda Belum Mencukupi, Kuliah Lagi YA!';
                }
            } else {
                return 'Matakuliah Anda Belum Mencukupi, Kuliah Lagi YA!';
            }
        } else {
            return 'SKS Anda Belum Mencukupi, Kuliah Lagi YA!';
        }
    }
}

$do = new DO;
$withdrawl = $do->main(112, 50, 3);
echo $withdrawl;
