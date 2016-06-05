<?php

    class Model_User extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        //用户注册
        public function add_user()
        {
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);
            $encode_password = password_hash($password, PASSWORD_DEFAULT);

            $data = array(
                'user_name' => $username,
                'user_password' => $encode_password,
            );
            if ($this->db->insert('tb_user', $data)) {
                return true;
            } else {
                return false;
            }
        }

        //用户登陆
        public function login()
        {
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);


            $array = array('user_name' => $username);

            $query = $this->db->get_where("tb_user", $array);

            $result = $query->row();

            $result_password = $result->user_password;



            if (password_verify($username, $result_password)) {

                $this->session->set_userdata('user_id', $result ->user_id);
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('is_login', "true");

                return true;

            } else {

                return false;
            }
        }

    }