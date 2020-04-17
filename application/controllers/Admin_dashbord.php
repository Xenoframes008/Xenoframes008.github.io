<?php

class Admin_dashbord extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        if (!$this->session->userdata('user_id')) {
            return redirect('login');
        }
    }

    public function property_details() {

        $id = $this->uri->segment(3);
        $post['result'] = $this->user_model->property_details($id);
        $data['_view'] = 'user/property_details_user';
        $this->load->view('layout/master', $data);
//      echo '<pre>';
//      print_r($result);
//        echo $id;
    }

    public function dashbord() {

        $data['_view'] = 'page';
        $this->load->view('layout/master', $data);
    }

    public function register_tbl() {
        $data['records'] = $this->property_model->show_register_tble();
        $data['_view'] = 'table/register_info_tbl';
        $this->load->view('layout/master', $data);
    }

    public function post_referenc_tbl() {
        $data['records'] = $this->property_model->show_post_referenc_tble();
        $data['_view'] = 'table/post_referenc_tbl';
        $this->load->view('layout/master', $data);
    }

    public function show_image() {
        $data['records'] = $this->property_model->show_image_path();
        $data['_view'] = 'table/image_uplode';
        $this->load->view('layout/master', $data);
    }

    public function imageupload() {
        $data['result'] = $this->user_model->delete_upload_photo();
        $data['_view'] = 'upload_image/image_upload';
        $this->load->view('layout/master', $data);
    }

    public function show_upload_img() {

        $data['result'] = $this->property_model->show_upload_image();
        $data['_view'] = 'upload_image/shoe_upload_image';
        $this->load->view('layout/master', $data);
    }

    public function change_password() {

        // $data['result']= $this->property_model->show_upload_image();
        $data['_view'] = 'login/change_password';
        $this->load->view('layout/master', $data);
    }

    public function update_user_profile() {

        $data['_view'] = 'registration/profile_update';
        $this->load->view('layout/master', $data);
    }

    public function upload_profile_image() {

        $data['_view'] = 'upload_image/upload_profile';
        $this->load->view('layout/master', $data);
    }

    public function table() {
        $data['records'] = $this->property_model->show_time_shedul_table();
        $data['_view'] = 'table/time_shedul_tbl';
        $this->load->view('layout/master', $data);
    }

    public function view_refers_details() {
        $data['records'] = $this->admin_model->view_refers_details('$id');
        $data['_view'] = 'admin/refers_view';
        $this->load->view('layout/master', $data);
    }

    public function admin_user_regi() {
        $data['_view'] = 'admin/admin_user_registration';
        $this->load->view('layout/master', $data);
    }

    public function admin_update() {
        $data['records'] = $this->admin_model->view_refers_details('$id');
        $data['_view'] = 'admin/admin_user_update';
        $this->load->view('layout/master', $data);
    }

    public function bulder_registration() {

        $data['result'] = $this->property_model->show_upload_image();
        $data['_view'] = 'user/builder_registration';
        $this->load->view('layout/master', $data);
    }

    public function referens_registration() {

        $data['result'] = $this->property_model->show_upload_image();
        $data['_view'] = 'user/referens_registration';
        $this->load->view('layout/master', $data);
    }

    public function referens_upload_document() {

        $data['result'] = $this->property_model->show_upload_image();
        $data['_view'] = 'upload_image/upload_document';
        $this->load->view('layout/master', $data);
    }

    public function tbl_todays_register_details() {
        $data['records'] = $this->property_model->tbl_todays_register_details();
        $data['_view'] = 'table/tbl_todays_rgister_details';
        $this->load->view('layout/master', $data);
    }

    public function referens() {
        $referns = $this->property_model->referens();
        echo '<pre>';
        print_r($referns);
    }

    public function change_user_name() {
        $data['_view'] = 'user/change_user_name';
        $this->load->view('layout/master', $data);
    }

    public function see_notification() {

        $data['result'] = $this->user_model->notification_all();
        $data['_view'] = 'user/see_notification';
        $this->load->view('layout/master', $data);
    }

}

?>
