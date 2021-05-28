<?php

class Aduan extends Controller{
    public function index()
    {
        $data['judul'] = 'Buat Aduan';
        $this->view('templates/header', $data);
        $this->view('aduan/index', $data);
        $this->view('templates/footer');
    }

    public function list()
    {
        $data['judul'] = 'List Aduan';
        $data['aduan'] = $this->model('Aduan_model')->getAllAduan();
        $this->view('templates/header', $data);
        $this->view('aduan/list', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Aduan';
        $data['aduan'] = $this->model('Aduan_model')->getAduanByID($id);
        $this->view('templates/header', $data);
        $this->view('aduan/detail', $data);
        $this->view('templates/footer');
    }

    public function tanggapi()
    {
        if($this->model('Aduan_model')->tanggapiAduan($_POST) > 0){
            $this->model('Aduan_model')->ubahStatusAduan($_POST);
            Flasher::setFlash('Tanggapan', 'berhasil', 'dikirimkan', 'success');
            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            Flasher::setFlash('Tanggapan', 'gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }

    public function simpan()
    {
        if($this->model('Aduan_model')->tambahDataAduan($_POST) > 0){
            Flasher::setFlash('Aduan', 'berhasil', 'dikirimkan', 'success');
            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            Flasher::setFlash('Tanggapan', 'gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }
}