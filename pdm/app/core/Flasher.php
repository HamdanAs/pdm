<?php

class Flasher{

    public static function setFlash($jenis, $pesan, $aksi, $tipe = null){
        $_SESSION['flash'] = [
            'jenis' => $jenis,
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash(){
        if(isset($_SESSION['flash'])){
            echo 
            '<div class="session session-' . $_SESSION['flash']['tipe'] . '" id="session">
                <p class="close" id="close">X</p>
                ' . $_SESSION['flash']['jenis'] . ' berhasil ' . $_SESSION['flash']['pesan'] . ' <strong>' . $_SESSION['flash']['aksi'] .'</strong>
            </div>';
            unset($_SESSION['flash']);
        }
    }

}