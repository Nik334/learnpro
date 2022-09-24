<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helpers('url','form');
    }

    public function index() {
        $this->load->view('link');
        $this->load->view('Body');
        $this->load->view('Model');
    }
    public function forNav()
    {
        $this->load->view('link'); 
        $this->load->view('nav');
        $this->load->view('crousal');
        $this->load->view('Body');
        $this->load->view('Model');
    }
}