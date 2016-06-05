<?php
if (!file_exists(APPPATH)) {
    show_404();
}

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {

        $this->load->view('register');
    }

    /**
     * 创建验证码:前台提交到哪里验证的？
     */
    public function get_captcha()
    {
        $this->load->library('Captcha');
        $this->captcha->doimg();
        $_SESSION['verify_code'] = $this->captcha->getCode();//验证码保存到SESSION中

    }

    public function register_check()
    {
        $this->load->model('Model_User');    //加载数据库模型
        $verify_code = $this->input->post('verify_code', TRUE);
      //  echo strtolower($verify_code);
     //   var_dump($_SESSION);
        if (isset($verify_code)) {

            if (strtolower($verify_code) != $_SESSION["verify_code"]) {
                //判断session值与用户输入的验证码是否一致;

                $arr['verify_code_error'] = 'verify_code_error';
                echo json_encode($arr);

            } else {

                if ($this->Model_User->add_user()) {
                    $arr['success'] = 1;
                    echo json_encode($arr);
                } else {
                    $arr['success'] = 0;
                    echo json_encode($arr);
                }

            }
        }


    }

    public function login_success()
    {
        $this->load->view('Activity');
    }
}