<?php
    if (!file_exists(APPPATH)) {
        show_404();
    }

    class Login extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->model('Model_User');    //加载数据库模型
        }

        public function index()
        {

          
            $this->load->view('login');
        }

        public function logincheck()
        {

            if ($this->Model_User->login()) {
                $arr['success'] = 1;
                echo json_encode($arr);
            } else {
                $arr['success'] = 0;
                echo json_encode($arr);
            }
        }

        //退出登陆
        public function logout()
        {

            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('user_name');
            $this->session->unset_userdata('is_login');

            header("Location:" . site_url(Main));

        }

    }