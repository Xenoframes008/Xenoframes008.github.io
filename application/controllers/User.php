<?php

class User extends CI_Controller {

    public function index() {

//            echo 'hello';
//            $post=$this-> input->post();
//            echo '<pre>';
//            print_r($post);\
        $this->load->view('user/submit_seller_property');
        // $this->load->view('photo');
    }

    public function submit_seller_property() {
        $data['_view'] = 'user/submit_seller_property';
        $this->load->view('layout/master', $data);
    }

    public function submit_property() {

        $this->form_validation->set_rules('property_Owner', ' Select property Owner', 'required');
        //  $this->form_validation->set_rules('username', ' username Owner', 'required');
        // $this->form_validation->set_rules('mobile', ' property Owner', 'required');
        // $this->form_validation->set_rules('email', ' email Owner', 'required');
        $this->form_validation->set_rules('property_for', ' property_for Owner', 'required');
        // $this->form_validation->set_rules('property_Owner', ' property Owner', 'required');
        $this->form_validation->set_rules('property_name', ' property_name Owner', 'required');
        $this->form_validation->set_rules('location', ' location Owner', 'required');
        $this->form_validation->set_rules('address', ' select address', 'required');

        if ($this->form_validation->run()) {
            $post = $this->input->post();
            $post['post_date'] = date(" jS F Y ");
            $user = $this->session->userdata('user_id');
            $post['user_id'] = $user;
//            echo '<pre>';
//            print_r($post);
//           exit;
            $ins = $this->user_model->insert_property($post);

            if ($ins) {

                $this->session->set_userdata('form_id', $ins);
                //print_r($result);
                echo "insert";
                redirect('user#step2');
            } else {
                echo 'no insert';
            }
        } else {
            $this->load->view('user/submit_seller_property');
        }
    }

    public function submit_property2() {
        echo 'hello evey on';

//exit;
        $post = $this->input->post();

        // echo '<pre>';
        // print_r($post);
        // exit;
        $ins = $this->user_model->insert_property_userid($post);
        if ($ins) {
            echo 'yes';
            redirect('user#step3');
        } else {
            echo 'no';
        }
    }

    public function submit_property3() {
        // echo 'hello';
        $post = $this->input->post();

        //echo '<pre>';
        //  $user=date(" jS F Y ");
        // print_r($post);
        //   exit;
        $ins = $this->user_model->insert_property_userid3($post);
        if ($ins) {
            $uaer_type = $this->session->userdata('user_type');
            echo $uaer_type;
            if ($uaer_type == "") {
                redirect('user#step4');
            } else {

                redirect('admin_dashbord/imageupload');
            }
        } else {
            echo 'no';
        }
    }

    public function admin_user_refer() {


        $post = $this->input->post();

        $result = $this->user_model->admin_user_refer($post);
        if ($result) {
            echo 'insert succesfully';
            $this->session->set_flashdata('refer', 'Assign successfully');
            redirect('Osumare_admin_dashbord/time_shedule_table');
        } else {
            echo 'recored not insert ';
        }
    }

    public function admin_refer_person() {
//              $result= $this->user_model->admin_refer_person();

        $data['result'] = $this->user_model->admin_refer_person();
//      echo "<pre>";
        //print_r($result);
//      $this->load->view('table/tbl_assign_admin', compact('result'));
        $data['_view'] = 'table/tbl_assign_admin';
        $this->load->view('layout/master', $data);
    }

    public function refer_person_table() {

        $data['records'] = $this->user_model->refer_person_table();
        $data['_view'] = 'table/refer_referens_person_list';
        $this->load->view('layout/master', $data);
        // print_r($result);
    }

    public function admin_post_refer() {

        $post = $this->input->post();

        $assign_id = $this->session->userdata('user_id');
        //print_r($assign_id);
        $post['assign_id'] = $assign_id;
        //print_r($post);
        $result = $this->user_model->admin_post_refer($post, $assign_id);
        if ($result) {
            echo 'insert succesfully';
            $this->session->set_flashdata('Delete', 'Assign successfully');
            redirect('Osumare_admin_dashbord/post_referenc_table');
        } else {
            echo 'recored not insert ';
        }
    }

    public function admin_post_refer_tbl() {
        // echo 'hello';
        $data['records'] = $this->user_model->admin_post_refer_tbl();
        $data['_view'] = 'table/assign_post_reference';
        $this->load->view('layout/master', $data);
    }

    public function submit_requirment_user() {
        $data['_view'] = 'user/submit_requirment_user';
        $this->load->view('layout/master', $data);
    }

    public function notification_admin_user() {

        $post = $this->input->post();
//        print_r($post);
//        exit;
        $send_notifcation_id = $this->session->userdata('user_id');
        //  print_r($send_notifcation_id);
        $post['send_notifcation_id'] = $send_notifcation_id;
        $admin = 1;
        $post['admin'] = $admin;

        print_r($post);

        //exit();
        $query = $this->user_model->notification_admin_user($post);
        if ($query) {
            $this->session->set_flashdata('notification', 'Assign successfully');

            echo 'insert';
            redirect('User/admin_post_refer_tbl');
        }
    }

    public function notification_admin() {

        $post = $this->input->post();
        $send_notifcation_id = $this->session->userdata('user_id');
        //  print_r($send_notifcation_id);
        $post['send_notifcation_id'] = $send_notifcation_id;
        $admin = 2;
        $post['admin'] = $admin;

        print_r($post);


        $query = $this->user_model->notification_admin_user($post);
        if ($query) {
            $this->session->set_flashdata('notification', 'Assign successfully');

            echo 'insert';
            redirect('Osumare_admin_dashbord/Reference_Person_Details');
        }
    }

    public function notification() {
        //echo 'hello';
        $data['result'] = $this->user_model->notification();
        $data['_view'] = 'notification';
        $this->load->view('layout/master', $data);
        //print_r($result);
    }

    public function delete_upload_photo() {

        $data['result'] = $this->user_model->delete_upload_photo();
        $data['_view'] = 'upload_image/delete_uploade_photo';
        $this->load->view('layout/master', $data);
        //print_r($result);
    }

    public function delete_uplosd_photo_user() {
        // echo 'hello';
        $delete = $this->user_model->delete_uplosd_photo_user('$id');
        //print_r($delete);

        if ($delete) {
            echo 'delete success ';
            $this->session->set_flashdata('Delete', 'Delete successfully ');
            redirect('user/delete_upload_photo');
        } else {
            echo 'not delete';
            $this->session->set_flashdata('Delete', 'Delete  Not successfully');
        }
    }

    public function builder_registration() {

        $data['_view'] = 'user/builder_registration';
        $this->load->model('layout/master', $data);
    }

    public function property() {

        $data['result'] = $this->user_model->property();
        $data['_view'] = 'user/property_details';
        $this->load->view('layout/master', $data);
//     $result=$this->user_model->property();
//       echo '<pre>';
//      print_r($result);
    }

    public function property1() {

        $data['result'] = $this->user_model->property();
        $data['_view'] = 'user/property_peggination';
        $this->load->view('layout/master', $data);
//     $result=$this->user_model->property();
//       echo '<pre>';
//      print_r($result);
//              
    }

    public function property_home() {

        $data['result'] = $this->user_model->property();
        $data['_view'] = 'user/property_home_page';
        $this->load->view('layout/property_home', $data);
//     $result=$this->user_model->property();
//       echo '<pre>';
//      print_r($result);
//              
    }

    public function property_details() {

        $id = $this->uri->segment(3);
        if ($id) {
            $post['result'] = $this->user_model->property_details($id);
            $data['_view'] = 'user/property_details_user';
            $this->load->view('layout/master', $data);
        } else {
            $this->session->set_flashdata('success', 'Sorry property not availebl ');
            redirect('User/admin_refer_person');
        }
//      echo '<pre>';
//      print_r($result);
//        echo $id;
    }

    public function fetch_property() {
        $records = $this->user_model->fetch_property();
//         echo '<pre>';
//         print_r($records);
//         exit;
        $post['records'] = $this->user_model->fetch_property();
        $data['_view'] = 'user/image_show';
        $this->load->view('layout/master', $data);
    }

    public function update_ntf() {
        // echo 'hello';
        $this->user_model->update_ntf();
        //echo count($q);
    }

    public function count_ntf() {
        // echo 'hello';
        $data['result'] = $this->user_model->count_ntf();
        $data['_view'] = 'user/image_show';
        $this->load->view('layout/master', $data);
    }

    public function chang_ntf() {
        echo 'hello';
        $this->user_model->chang_ntf();
    }

    public function register_no_of() {
        echo '<pre>';
        $q = $this->user_model->register_no_of();
        print_r(count($q));
    }

    public function property_image() {

        $id = $this->uri->segment(3);
        $data['result'] = $this->user_model->get_images($id);
        $data['_view'] = 'upload_image/property_image';
        $this->load->view('layout/master', $data);
    }
 public function property_image_home() {

        $id = $this->uri->segment(3);
        $data['result'] = $this->user_model->get_images($id);
        $data['_view'] = 'upload_image/property_image';
        $this->load->view('layout/property_home', $data);
    }
    public function submit_requirment_home() {

        $this->load->view('user/submit_requirment_hom');
    }

    public function submit_requirment() {

        echo 'hello';
        $post = $this->input->post();
        echo '<pre>';
        print_r($post);
    }
    public function admin_user_feedback(){
        $user_id= $this->session->userdata('user_id');
        
        $post = $this->input->post();
         $post['send_notifcation_id']=$user_id;
      
        $ins=$this->user_model->admin_user_feedback($post);
        if($ins){
            echo 'insert';
             $this->session->set_flashdata('success', 'Feedback send  complet');
             redirect('Osumare_admin_dashbord/admin_mangement_table');
        }
    }
    public function search_property(){
        
      
        $location=$this->input->post('location');
        $pries=$this->input->post('pries');
        $Carpet_Area_sq=$this->input->post('Carpet_Area_sq');
        
        
//        echo $location;
//        echo $pries;
//        echo $Carpet_Area_sq;
//        //print_r($post);
//       //exit;
//         $resultt= $this->user_model->search($location,$pries);
//         echo '<pre>';
//        print_r($resultt);
//        exit;
       $data['result']= $this->user_model->search($location,$pries);
        $data['_view'] = 'user/property_peggination';
        $this->load->view('layout/master', $data);
//       echo '<pre>';
//       print_r($result);
    }
    public function search_property_home(){
      //  echo 'hello';
          $location=$this->input->post('location');
        $pries=$this->input->post('pries');
        $Carpet_Area_sq=$this->input->post('Carpet_Area_sq');
        
        
//        echo $location;
//        echo $pries;
//        echo $Carpet_Area_sq;
//        //print_r($post);
//       //exit;
//         $resultt= $this->user_model->search($location,$pries);
//         echo '<pre>';
//        print_r($resultt);
//        exit;
       $data['result']= $this->user_model->search_home($location,$pries);
        $data['_view'] = 'user/property_home_page';
        $this->load->view('layout/property_home', $data);
//       echo '<pre>';
//       print_r($result);
    }
    public function home_search(){
       
      
        $location=$this->input->post('location');
        $plot_size=$this->input->post('plot_size');
        $corpet_area=$this->input->post('corpet_area');
        $min_price=$this->input->post('min_price');
        $max_price=$this->input->post('max_price');
        $data['result']=$this->user_model->search_home_first($location,$plot_size,$corpet_area,$min_price,$max_price);
//                 echo '<pre>';
//                 print_r($result);
//                 exit;
//                 $data['result']=$this->user_model->search_home_first($location,$plot_size,$corpet_area,$min_price,$max_price);

         $data['result']=$this->user_model->search_home_first($location,$plot_size,$corpet_area,$min_price,$max_price);
         $data['_view'] = 'user/property_home_page';
         $this->load->view('layout/property_home', $data);
       
    }

}
