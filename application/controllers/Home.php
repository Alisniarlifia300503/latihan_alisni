<?php
    class Home extends CI_Controller{
       function index(){
           $this->load->view('partisi/head');
           $this->load->view('partisi/navigasi');
           $this->load->view('partisi/header');
           $this->load->view('home_v');
           $this->load->view('partisi/about');
           $this->load->view('partisi/contact');
           $this->load->view('partisi/footer');
           $this->load->view('partisi/modal');
           $this->load->view('partisi/js');

       }
   }
?>