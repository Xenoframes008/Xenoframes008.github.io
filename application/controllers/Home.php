<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
//           load->view('submit_property');
        $this->load->view('homepage');
    }

    public function user_login() {

        $this->load->view('login_in');
    }

    public function user_register() {

        $config = [
            'upload_path' => './uploads/',
            'allowed_types' => 'jpg|gif|png|jpeg',
        ];
        $this->load->library('upload', $config);
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('mobile', 'mobile ', 'required');
        $this->form_validation->set_rules('Occupation', 'Occupation', 'required');
        $this->form_validation->set_rules('Cast', ' Cast', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('age', 'age', 'required');
        if ($this->form_validation->run() && $this->upload->do_upload('userfile')) {
            $post = $this->input->post();
            $data = $this->upload->data();
            $image_path = base_url("uploads/" . $data['raw_name'] . $data['file_ext']);
            $post['image_path'] = $image_path;
            if ($this->property_model->insert_user_register($post)) {

                echo 'inser';
            } else {

                echo 'no inser';
            }

            // $data = array('upload_data' => $this->upload->data());
            // redirect('Admin_dashbord/dashbord');
        } else {

            $upload_error = $this->upload->display_errors();
            $data['upload_error'] = $upload_error;
            $data['_view'] = 'registration/user_registration';
            $this->load->view('layout/master', $data);
            //$this->load->view('registration/user_registration');
        }
    }

    public function user_register_update() {
           
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('mobile', 'mobile ', 'required');
        $this->form_validation->set_rules('Occupation', 'Occupation', 'required');
        $this->form_validation->set_rules('Cast', ' Cast', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('age', 'age', 'required');
        if ($this->form_validation->run()) {
            $post = $this->input->post();
//                $data=  $this->upload->data();
//                $image_path = base_url("uploads/".$data['raw_name'].$data['file_ext']);
//                $post['image_path']=$image_path;
//                
            if ($this->property_model->update_user()) {

                echo 'inser';
            } else {

                echo 'no inser';
            }
             $user_type= $this->session->userdata('user_type');
             echo $user_type;
             if($user_type=="Builder"){
                 
                 echo 'builder login';
                 redirect('Admin_dashbord/bulder_registration');
                 
             } else if($user_type=="Reference") {
                 
               
                redirect('Admin_dashbord/referens_upload_document');
                 
             } else {
                 
                 redirect('user/property1');
                 
             }
            // exit();
            //$data = array('upload_data' => $this->upload->data());
            redirect('Admin_dashbord/dashbord');
        } else {

            // $upload_error = $this->upload->display_errors();
            // $data['upload_error']=$upload_error;
            $data['_view'] = 'registration/profile_update';
            $this->load->view('layout/master', $data);
            //$this->load->view('registration/profile_update');
        }
    }

    public function update_builder_register() {

       

        $this->form_validation->set_rules('Company_name', 'Compony  Name ', 'required');
        $this->form_validation->set_rules('Ongoing_Project', 'Ongoing Project', 'required');
        $this->form_validation->set_rules('Completed_Project', 'Completed Project', 'required');
        $this->form_validation->set_rules('director_name', 'director name ', 'required');
        $this->form_validation->set_rules('director_mobile', 'director mobile', 'required');
        $this->form_validation->set_rules('director_email', 'director email ', 'required');
        $this->form_validation->set_rules('Contact_Person', 'Contact Person ', 'required');
        $this->form_validation->set_rules('Contact_Person_mobile', 'Contact Person name', 'required');
        $this->form_validation->set_rules('Contact_Person_email', 'Contact Person email', 'required');
        $this->form_validation->set_rules('Contact_Person_mobile', 'Contact Person mobile', 'required');
        if ($this->form_validation->run()) {
            $post = $this->input->post();
           
//            echo '<pre>';
//            print_r($post);
            // exit;
           
            
            if ($this->property_model->update_builder_register($post)) {

                echo 'insert data';
                redirect('user/property1');
            } else {
                echo 'no insert';
            }
          
            
        } else {
        
            //$error =  $this->upload->display_errors();
            $data['_view'] = 'registration/builder_registration';
            $this->load->view('layout/master', $data);
            //$this->load->view('reg_use',  compact('upload_error'));
        }
    }

    public function post_refer() {
        $post= $this->input->post();
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('mobile', 'mobile number ', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('Occupation', 'Occupation ', 'required');
        $post = $this->input->post();
        //echo '<pre>';
        // print_r($post);
        $referens_id = $this->session->userdata('user_id');
        $post['referens_id'] = $referens_id;
        // print_r($post);

        if ($this->form_validation->run()) {
            if ($this->property_model->insert_post_referenc($post)) {

                echo 'inser record';
                redirect('admin_dashbord/dashbord');
            } else {

                echo 'no insert record';
            }
        } else {

            // echo 'hello';
            $data['_view'] = 'registration/post_referenc';
            $this->load->view('layout/master', $data);
        }
    }

    public function time_shedul() {


        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('mobile', 'mobile ', 'required');
        $this->form_validation->set_rules('email', 'Occupation', 'required');
        $this->form_validation->set_rules('datepicker', 'Date', 'required');
        $this->form_validation->set_rules('visittime', 'Time', 'required');
        if ($this->form_validation->run()) {
          
            
            $post = $this->input->post();
//           print_r($post);
          //  exit;
            $user_id = $this->session->userdata('user_id');
            $post['user_id'] = $user_id;
            $this->property_model->time_shedul($post);

            redirect('user/property1');
        } else {

            $data['_view'] = 'registration/time_shedule';
            $this->load->view('layout/master', $data);
        }
    }
 public function time_shedul_without_log() {


        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('mobile', 'mobile ', 'required');
        $this->form_validation->set_rules('email', 'Occupation', 'required');
        $this->form_validation->set_rules('datepicker', 'Date', 'required');
        $this->form_validation->set_rules('visittime', 'Time', 'required');
        if ($this->form_validation->run()) {
          
            
            $post = $this->input->post();
//            print_r($post);
          //  exit;
//            $user_id = $this->session->userdata('user_id');
//            $post['user_id'] = $user_id;
            $this->property_model->time_shedul($post);

            redirect('user/property_home');
        } else {

            $data['_view'] = 'registration/time_shedule';
            $this->load->view('layout/master', $data);
        }
    }
    public function bank_details() {

//        echo 'welcom on bank detais account';
//        $post= $this->input->post();
//        echo '<pre>';
//        print_r($post);

        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('bank_name', 'Bank Name ', 'required');
        $this->form_validation->set_rules('Account_Number', 'Account Number', 'required');
        $this->form_validation->set_rules('Branch_Name', ' Branch Name', 'required');
        $this->form_validation->set_rules('ifsc_code', 'IFSC Code', 'required');
        if ($this->form_validation->run()) {
            $post = $this->input->post();
            print_r($post);
//                $data=  $this->upload->data();
//                $image_path = base_url("uploads/".$data['raw_name'].$data['file_ext']);
//                $post['image_path']=$image_path;
//                
            //exit;
            $user_id = $this->session->userdata('user_id');
            $post['user_id'] = $user_id;
            if ($this->property_model->bank_account($post)) {

                echo 'inser';
            } else {

                echo 'no inser';
            }

            //$data = array('upload_data' => $this->upload->data());
            redirect('Admin_dashbord/dashbord');
        } else {


            $data['_view'] = 'user/bank_details';
            $this->load->view('layout/master', $data);
        }
    }
    public function referens_details(){
            $post = $this->input->post();
           $ins=$this->property_model->update_user($post);
          
            if ($ins) {
                echo 'inser';
                redirect('admin_dashbord/referens_upload_document');
            } else {

                echo 'no inser';
            }

            // $data = array('upload_data' => $this->upload->data());
            // redirect('Admin_dashbord/dashbord');
        } 
        public function change_user(){
            $this->property_model->change_user();
            redirect('Admin_dashbord/show_upload_img');
        }
        public function update_bank_details(){
           // echo 'bank details';
            
               $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('bank_name', 'Bank Name ', 'required');
        $this->form_validation->set_rules('Account_Number', 'Account Number', 'required');
        $this->form_validation->set_rules('Branch_Name', ' Branch Name', 'required');
        $this->form_validation->set_rules('ifsc_code', 'IFSC Code', 'required');
        if ($this->form_validation->run()) {
            $post = $this->input->post();
            print_r($post);
//                $data=  $this->upload->data();
//                $image_path = base_url("uploads/".$data['raw_name'].$data['file_ext']);
//                $post['image_path']=$image_path;
//                
            //exit;
            $user_id = $this->session->userdata('user_id');
            $post['user_id'] = $user_id;
            if ($query=$this->user_model->update_bank_detail($post)) {

                echo 'inser';
                redirect('Admin_dashbord/dashbord');
            } else {

                echo 'no inser';
            }

            //$data = array('upload_data' => $this->upload->data());
            redirect('Admin_dashbord/dashbord');
        } else {

            $data['recored'] = $this->user_model->update_bank_details();
            $data['_view'] = 'user/update_bank_details';
            $this->load->view('layout/master', $data);
        }
          
    }
    
    public function builder_registr_start() {
       
        $post = $this->input->post();
         $login_count=1;
        $post['login_count']=$login_count;
        $builder_id= $this->session->userdata('user_id');
        $post['builder_id']=$builder_id;
        
            if ($this->property_model->insert_builder_register($post)) {

                redirect('user/property1');
            }
            
    }
   public function update_builder_info(){
         $dats['result']=$this->property_model->update_builder_info();
         $data['_view'] = 'registration/builder_registration';
         $this->load->view('layout/master', $data);
    }
}


?>

