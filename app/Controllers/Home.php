<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index'); // artinya akan memanggil file yang ada di dalam folder views lalu ke folder home dan nama filenya bernama index.php
        $this->view('templates/footer');
    }
}