<?php
class Admin extends CI_Controller {

    public function index() {
        $this->load->view('dummy');

//        $this->load->view('admin/admin_registration');
    }
    public function delete_user($id) {

//        $this->load->model('admin_model');
        $delete = $this->admin_model->delete_user_registration('$id');
        if ($delete) {
            echo 'delete success ';
            $this->session->set_flashdata('Delete', 'Delete successfully ');
            redirect('Osumare_admin_dashbord/delete_register_table');
        } else {
            echo 'not delete';
            $this->session->set_flashdata('Delete', 'Delete  Not successfully');
        }
    }

    public function delete_post_refers($id) {

//        $this->load->model('admin_model');
        $delete = $this->admin_model->delete_post_refers('$id');
        if ($delete) {
            echo 'delete success ';

            $this->session->set_flashdata('Delete', 'Delete successfully ');
            redirect('Osumare_admin_dashbord/post_referenc_table');
        } else {
            echo 'not delete';
            $this->session->set_flashdata('Delete', 'Delete  Not successfully');
        }
    }

    public function delete_bank_details($id) {

//        $this->load->model('admin_model');
        $delete = $this->admin_model->delete_bank_details('$id');
        if ($delete) {
            echo 'delete success ';
            $this->session->set_flashdata('Delete', 'Delete successfully ');
            redirect('Osumare_admin_dashbord/bank_detail_table');
        } else {
            echo 'not delete';
            $this->session->set_flashdata('Delete', 'Delete  Not successfully');
        }
    }

    public function delete_user_time_shedul($id) {

        $this->load->model('admin_model');

        $delete = $this->admin_model->delete_user_time_shedul('$id');
        if ($delete) {
            echo 'delete success ';
            $this->session->set_flashdata('Delete', 'Delete successfully ');
            redirect('Osumare_admin_dashbord/time_shedule_table');
        } else {
            echo 'not delete';
            $this->session->set_flashdata('Delete', 'Delete  Not successfully');
        }
    }

    public function delete_admin_user($id) {

//        $this->load->model('admin_model');
        $delete = $this->admin_model->delete_admin_user('$id');
        if ($delete) {
            echo 'delete success ';
            $this->session->set_flashdata('Delete', 'Delete successfully ');
            redirect('Osumare_admin_dashbord/admin_mangement_table');
        } else {
            echo 'not delete';
            $this->session->set_flashdata('Delete', 'Delete  Not successfully');
        }
    }

    public function view_refers_details($id) {
        // echo 'hello evry one';
        //exit;
        $delete = $this->admin_model->view_refers_details('$id');
        if ($delete) {
            echo 'delete success ';

            redirect('Osumare_admin_dashbord/admin_mangement_table');
        } else {
            echo 'not delete';
        }
    }

    public function admin_user_update() {

        //   echo 'hello';
        $result = $this->admin_model->admin_user_update('$id');

        if ($result) {
            echo 'update';
            $this->session->set_flashdata('success', 'Update successfully ');
            redirect('Osumare_admin_dashbord/admin_mangement_table');
        } else {
            echo 'no hello';
        }
    }

    public function referens_datails($id) {

//        $this->load->model('admin_model');
        $data['records'] = $this->admin_model->referens_datails('$id');
        $data['_view'] = 'table/refer_referens_person_list';
        $this->load->view('layout/master', $data);
    }

    public function notification_all() {

        $this->admin_model->notification_all();
    }
    public function referens_document() {
        $data['records'] = $this->admin_model->referens_datails('$id');
        $data['_view'] = 'table/referens_person_profile_admin';
        $this->load->view('layout/master', $data);
    }
    public function builder_delete_user(){
         $delete = $this->admin_model->builder_delete_user('$id');
        if ($delete) {
            echo 'delete success ';

           $this->session->set_flashdata('Delete', 'Delete successfully ');
            redirect('Osumare_admin_dashbord/Builder_register_table');
        } else {
            echo 'not delete';
            $this->session->set_flashdata('Delete', 'Delete  Not successfully');
        }
        
    }
      public function delete_user_property(){
         $delete = $this->admin_model->delete_user_property('$id');
        if ($delete) {
            echo 'delete success ';

           $this->session->set_flashdata('Delete', 'Delete successfully ');
            redirect('user/property');
        } else {
            echo 'not delete';
            $this->session->set_flashdata('Delete', 'Delete  Not successfully');
        }
        
    }

}
