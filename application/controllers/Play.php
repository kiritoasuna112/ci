<?php

class Play extends CI_Controller{

    // public function index()
    // {
    //     $db = $this->db->get('user_types');
    //     print_r($db->result());
    // }

    // public function users()
    // {
    //     $db = $this->db->get('users');
    //     print_r($db->result());
    // }

    public function index()
    {
        $this->load->model('user_model');
        $user = $this->user_model->getUser();
        print_r($user);
    }
}