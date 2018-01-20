<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    public function index()
    {
        $this->load->view('index');
    }

    public function aboutus(){
        $this->load->view('about-us');
    }
    public function csr(){
        $this->load->view('csr');
    }
    public function contact(){
        $this->load->view('contact');
    }
    public function officeculture(){
        $this->load->view('office-culture');
    }
    public function privacypolicy(){
        $this->load->view('privacy-policy');
    }
}
