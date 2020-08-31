<?php
class User extends CI_Controller{

    // method to read all data
    function index(){
        $this->load->model('user_model');
        $users = $this->user_model->allRecords();
        $data = array();
        $data['users'] = $users;
        $this->load->view('list',$data);
    }
    //method to create data
    function create(){
        $this->load->model('user_model');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');

        if($this->form_validation->run()==false){
            $this->load->view('create');
        }else{
            $formArray = array();
            $formArray['name'] =  $this->input->post('name');
            $formArray['email'] =   $this->input->post('email');
            $formArray['created_at'] = date('Y-m-d');
            $this->user_model->create($formArray);
            $this->session->set_flashdata('success','Record Added Successfully');
            redirect(base_url().'index.php/user/index');

        }
    }
    //method to create the edit  and readone data
    function edit($userId){
        $this->load->model('user_model');
        $user = $this->user_model->getUser($userId);
        $data = array();
        $data['user'] = $user;
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('name','Name','required');
        if($this->form_validation->run() == false){
            $this->load->view('edit',$data);
        }else{
            //For update records
          $formArray = array();
          $formArray['name'] = $this->input->post('name');
          $formArray['email']= $this->input->post('email');

          $this->user_model->updateUser($userId,$formArray);
          $this->session->set_flashdata('success','Record Updated');
          redirect(base_url().'index.php/user/index');
        }
    }

    function delete($userId){
        $this->load->model('user_model');
        $this->user_model->deleteUser($userId);
        $this->session->set_flashdata('success','Record deleted');
        redirect(base_url().'index.php/user/index');
    }

}
?>