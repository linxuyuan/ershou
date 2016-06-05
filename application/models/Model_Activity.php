<?php

    class Model_Activity extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        //活动查询
        public  function get_activity_data(){
            $query =  $this->db->get('tb_activity');
            $this->db->limit(4);
            return $query->result_array();
        }
        
        

    }