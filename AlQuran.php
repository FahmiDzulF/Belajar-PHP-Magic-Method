<?php

class AlQuran
{
    private function tampilkan_harga ($harga)
    {
        echo "Harga Al_quran Rp.50000,- $harga\n";
    }

    function __call($method, $var)
    {
        echo "Memanggil $method menggunakan __call()dengan variable" . $var[0].
        "";
    }
}

$Al_quran = new AlQuran();

$Al_quran->bimsalabim__('lima_puluh_ribu');
