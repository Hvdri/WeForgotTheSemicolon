<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {

        if ($this->session->userdata('logged', TRUE)) {
            $this->load->view('home-page');
        }
        else {
            redirect('login');
        }
        
    }

}