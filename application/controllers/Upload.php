<?php
    if (!file_exists(APPPATH)) {
        show_404();
    }

    class Upload extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }

        public function index()
        {

        }

        //图片上传
        public function do_upload()
        {
            $upload_path = "./uploads/"; //定义文件上传的位置
            $goods_name = $_POST["goods_name"];
            $goods_price = $_POST["goods_price"];
            $goods_description = $_POST["description"];
            $contact_tel = $_POST["contact_tel"];
            $contact_qq = $_POST["contact_qq"];
            $good_category = $_POST["goods_category"];

            function reArrayFiles(&$file_post)
            {
                $file_ary = array();
                $file_count = count($file_post['name']);
                $file_keys = array_keys($file_post);  //array_keys返回包含数组中所有键名的一个新数组：
                for ($i = 0; $i < $file_count; $i++) {
                    foreach ($file_keys as $key) {
                        $file_ary[$i][$key] = $file_post[$key][$i];
                    }
                }
                return $file_ary;
            }

            if ($_FILES["file"]) {
                $file_ary = reArrayFiles($_FILES["file"]);
               // var_dump($file_ary);
                foreach ($file_ary as $file) {

                    if (!empty($file["name"])) {
                        $file_type = substr($file["type"], 6);
                        $newname = date('YmdHis', time()) . mt_rand() . '.' . $file_type;
                        move_uploaded_file($file['tmp_name'], $upload_path . $newname);
                        $img_url[] = base_url("uploads/" . $newname);
                    }
                }
                // var_dump($img_url);
            } else {
                echo "上传文件为空";
            }
            //添加商品信息到数据库
            $this->load->model('Model_Goods');
            $insert_goods_state = $this->Model_Goods->insert_goods();
            $insert_id = $this->db->insert_id(); //返回插入行的ID

            $insert_img_state = $this->Model_Goods->insert_img($insert_id, $img_url);

            if ($insert_goods_state == true && $insert_img_state == true) {
                $arr['success'] = 1;
                echo json_encode($arr);
            } else {
                $arr['success'] = 0;
                echo json_encode($arr);
            }


        }
    }
