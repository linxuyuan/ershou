<?php
    if (!file_exists(APPPATH)) {
        show_404();
    }

    class DetailGoods extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Model_Goods');    //加载数据库模型
            $this->load->library('session');
        }

       
        public function detail_goods($goods_id){

            $data['single_goods_img'] = $this->Model_Goods->get_goods_img($goods_id);
            $data['single_goods_info'] = $this->Model_Goods->get_single_goods_info($goods_id);
            $this->load->view('detailGoods.php',$data);
        }
        

    }