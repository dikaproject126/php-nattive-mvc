<?php 

class About extends Controller{
    public function index($nama ='Dika', $impian = 'Investor'){

        $data ['nama'] = $nama;
        $data ['impian'] = $impian;
        $data ['judul'] = 'About';
 
        $this->view('layouts/header', $data);
        $this->view('about/index', $data);  
        $this->view('layouts/footer');
    }

    public function page(){
        $data['judul'] = 'Pages';
        $this->view('layouts/header', $data);
        $this->view('about/page');
        $this->view('layouts/footer');
    }
}