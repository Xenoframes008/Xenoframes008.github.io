<?php

class Osumare_admin_dashbord extends CI_Controller {

    public function index() {

//      echo "welcome on osumare admin";
        $data['records'] = $this->property_model->show_register_tble();
        $data['_view'] = 'table/user_registration_tbl';
        $this->load->view('layout/master', $data);
    }

    public function register_table() {

        $data['records'] = $this->property_model->show_register_tble();
        $data['_view'] = 'table/user_registration_admin';
        $this->load->view('layout/master', $data);
    }

    public function post_referenc_table() {
        $data['records'] = $this->property_model->show_post_referenc_tble();
        $data['result'] = $this->property_model->admin_mangement();
        $data['_view'] = 'table/post_referens_admin';
        $this->load->view('layout/master', $data);
    }

    public function time_shedule_table() {
        
        $data['records'] = $this->property_model->show_time_shedul_table();
        $data['result'] = $this->property_model->admin_mangement();
        $data['_view'] = 'table/user_time_shedul_admin';
        $this->load->view('layout/master', $data);
    }

    public function bank_detail_table() {
        $data['records'] = $this->property_model->bank_detail_table();
        $data['_view'] = 'table/bank_detail_admin';
        $this->load->view('layout/master', $data);
    }

    public function admin_mangement_table() {
        $data['records'] = $this->property_model->admin_mangement();
        $data['_view'] = 'table/admin_mangement_admin';
        $this->load->view('layout/master', $data);
    }

    public function delete_register_table() {

//          echo "welcome on osumare admin";
        $data['records'] = $this->property_model->show_register_tble();
        $data['_view'] = 'table/user_registration_delete_admin';
        $this->load->view('layout/master', $data);
    }

    public function Reference_Person_Details() {
        $data['records'] = $this->property_model->Reference_Person_Details();
        $data['_view'] = 'table/tbl_reference_person_details';
        $this->load->view('layout/master', $data);
    }
        public function Reference_Person_profile() {
        $data['records'] = $this->property_model->Reference_Person_profile();
        $data['_view'] = 'admin/refers_view';
        $this->load->view('layout/master', $data);
    }
     public function document() {
         $result=$this->property_model->document();
         echo '<pre>';
         print_r($result);
//        $data['records'] = $this->property_model->document();
//        $data['_view'] = 'admin/refers_view';
//        $this->load->view('layout/master', $data);
    }
    public function Builder_register_table(){
        
       $data['records']= $this->property_model->Builder_register_table();
         $data['_view'] = 'table/builder_register_table';
        $this->load->view('layout/master', $data);
//       echo '<pre>';
//       print_r($result);
    }

}
