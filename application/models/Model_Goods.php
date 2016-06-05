<?php

    class Model_Goods extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        //插入商品信息
        public function insert_goods()
        {
            //获取表单提交的数据
            $goods_name = $this->input->post('goods_name');
            $goods_price = $this->input->post('goods_price');
            $goods_description = $this->input->post('description');
            $contact_tel = $this->input->post('contact_tel');
            $contact_qq = $this->input->post('contact_qq');
            $goods_category = $this->input->post('goods_category');

            $data = array(
                'goods_name' => $goods_name,
                'goods_price' => $goods_price,
                'goods_description' => $goods_description,
                'contact_tel' => $contact_tel,
                'contact_qq' => $contact_qq,
                'goods_category' => $goods_category,

            );
            if ($this->db->insert('tb_goods', $data)) {
                return true;
            } else {
                return false;
            }
        }

        //插入商品图片
        public function insert_img($insert_id, $img_url)
        {
            $affect_rows_num = 0;
            foreach ($img_url as $single_img_url) {
                $data = array(
                    'goods_id' => $insert_id,
                    'img_url' => $single_img_url,
                );
                $this->db->insert('tb_goods_img', $data);
                if ($this->db->affected_rows() == 1) {
                    $affect_rows_num++;
                }
            }

            if ($affect_rows_num == count($img_url)) {
                return true;
            } else {
                return false;
            }

        }

        //查询所有的商品信息
        public function get_goods_info()
        {
            $this->db->select('*');
            $this->db->join('tb_goods_img', 'tb_goods.goods_id = tb_goods_img.goods_id','inner')
                ->from('tb_goods')
                 ->group_by("tb_goods.goods_id");

            $query = $this->db->get();
            return $query->result();
        }

        //查询单个商品信息
        public function get_single_goods_info($goods_id)
        {
            $query = $this->db->get_where("tb_goods", array('goods_id' => $goods_id));
            return $query->row();
        }

        //查询商品图片
        public function get_goods_img($goods_id)
        {
            $query = $this->db->get_where("tb_goods_img", array('goods_id' => $goods_id));
            return $query->result();
        }
    }