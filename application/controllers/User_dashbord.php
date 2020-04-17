<?php

class User_dashbord extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        if (!$this->session->userdata('user_id')) {
            return redirect('login');
        }
    }

    public function index() {
        // echo "hello";
        // $data['records']= $this->property_model->show_register_tble();
        $data['_view'] = 'user/user_requirment';
        $this->load->view('layout/master', $data);

        //$this->load->view('submit_property');
    }

    public function bank_details() {

        $data['_view'] = 'user/bank_details';
        $this->load->view('layout/master', $data);
    }

    public function table() {

        $data['_view'] = 'table/userlist';
        $this->load->view('layout/master', $data);
    }

    public function submit_property() {

        $this->load->view('user/submit_property');
    }
    public function update_bank_details() {
        $data['recored'] = $this->user_model->update_bank_details();
        $data['_view'] = 'user/update_bank_details';
        $this->load->view('layout/master', $data);
    }
}

?>
