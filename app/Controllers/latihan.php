<?php
class Latihan extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Latihan';
        $data['lthn'] = $this->model('Latihan_model')->getAllLatihan();
        $this->view('templates/header', $data);
        $this->view('latihan/index', $data); 
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Latihan';
        $data['lthn'] = $this->model('Latihan_model')->getLatihanById($id);
        $this->view('templates/header', $data);
        $this->view('latihan/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Latihan_model')->tambahDataLatihan($_POST)> 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL.'/latihan');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: '.BASEURL.'/latihan');
            exit;
        }
    }

        public function hapus($id)
        {
            if($this->model('Latihan_model')->hapusDataLatihan($id) > 0){
                Flasher::setFlash('berhasil', 'dihapus', 'success');
                header('Location: '.BASEURL.'/latihan');
                exit;
            }else{
                Flasher::setFlash('gagal', 'dihapus', 'danger');
                header('Location: '.BASEURL.'/latihan');
                exit;
        }
    }
}