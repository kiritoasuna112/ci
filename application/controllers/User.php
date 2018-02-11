<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('user_type_model');

    }
 
    public function index()
    {
        $users = $this->user_model->getUser();
        $data = array(
            'users' => $users
        );
        $this->load->view('layout/header');
        $this->load->view('user/user', $data);
        $this->load->view('layout/footer');
    }

    public function show($userID = "")
    {
        $user = $this->user_model->getUserByID($userID);
        $data = [
            'user' => $user->row()
        ];
        $this->load->view('layout/header');
        $this->load->view('user/show', $data);
        $this->load->view('layout/footer');
    }

    public function profile()
    {
        echo "U are now Login";
    }

    public function edit($userID)
    {
        $user = $this->user_model->getUserByID($userID);
        $data = [
            'user' => $user->row()
        ];
        $this->load->view('layout/header');
        $this->load->view('user/edit', $data);
        $this->load->view('layout/footer');
    }

    public function update($userID)
    {
        $user = $this->input->post();
        $result = $this->user_model->update($userID, $user);
        if ($result) {
            redirect('/user');
        } else {
            echo "Has error";
        }
    }

    public function adduser()
    {
        $user_type = $this->user_type_model->getUserType();
        $data =[
            'user_types' => $user_type,
        ];
        $this->load->view('layout/header');
        $this->load->view('user/add_user', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data = $this->input->post();
        $result = $this->user_model->insertUser($data);
        if ($result) {
            redirect('/user');
        } else {
            echo "Has error";
        }
    }

    public function delete($userID)
    {
        $result = $this->user_model->delete($userID);
        if ($result) {
            redirect('/user');
        } else {
            echo "Has error";
        }
    }
}
