<?php
    if (!file_exists(APPPATH)) {
        show_404();
    }

    class Main extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Model_Goods');//加载数据库模型
            $this->load->helper('url');
            $this->load->library('session');
         //   $this->load->helper('security');
        }

        public function index()
        {
            $data['goods_info'] = $this->Model_Goods->get_goods_info();
            // $this->security->xss_clean($data);
            $this->load->view('main_index', $data);    //加载视图
        }

    }