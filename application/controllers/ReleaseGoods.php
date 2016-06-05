<?php
    if (!file_exists(APPPATH)) {
        show_404();
    }

    class ReleaseGoods extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }

        public function index()
        {
            $this->load->view('release_goods.html');
        }
    }