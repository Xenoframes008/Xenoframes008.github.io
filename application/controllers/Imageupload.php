<?php

class Imageupload extends CI_Controller {

    public function index() {

        $this->load->view('upload_image/imageupload_view');
    }

    public function doupload() {

        $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach ($_FILES as $key => $value)
            for ($s = 0; $s <= $count - 1; $s++) {

                $_FILES['userfile']['name'] = $value['name'][$s];
                $_FILES['userfile']['type'] = $value['type'][$s];
                $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                $_FILES['userfile']['error'] = $value['error'][$s];
                $_FILES['userfile']['size'] = $value['size'][$s];
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload',$config);
                $this->upload->do_upload();
                $data = $this->upload->data();
                $names = base_url("uploads/" . $data['raw_name'] . $data['file_ext']);
                $db_data = array(
                    'id' => NULL,
                    'name' => $names,
                    'user_id' => $this->session->userdata('user_id'),
                    'form_id' => $this->session->userdata('form_id'));
                $insert = $this->db->insert(' tbl_upload_image', $db_data);
            }
        if ($this->upload->do_upload('userfile')) {

            if ($insert) {

                redirect('user/delete_upload_photo');
            } else {
                echo 'no insert';
            }
        } else {
            $upload_error = $this->upload->display_errors();
            $data['upload_error'] = $upload_error;
            $data['_view'] = 'upload_image/image_upload';
            $this->load->view('layout/master', $data);
        }
    }
    public function douploads() {

        $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach ($_FILES as $key => $value)
            for ($s = 0; $s <= $count - 1; $s++) {

                $_FILES['userfile']['name'] = $value['name'][$s];
                $_FILES['userfile']['type'] = $value['type'][$s];
                $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                $_FILES['userfile']['error'] = $value['error'][$s];
                $_FILES['userfile']['size'] = $value['size'][$s];
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload',$config);
                $this->upload->do_upload();
                $data = $this->upload->data();
                $names = base_url("uploads/" . $data['raw_name'] . $data['file_ext']);
                $db_data = array(
                    'id' => NULL,
                    'name' => $names,
                  
                    'form_id' => $this->session->userdata('form_id'));
                $insert = $this->db->insert(' tbl_upload_image', $db_data);
            }
        if ($this->upload->do_upload('userfile')) {

            if ($insert) {

                redirect('user/property_home');
            } else {
                echo 'no insert';
            }
        } else {
            $upload_error = $this->upload->display_errors();
            //$data['upload_error'] = $upload_error;
            //$data['_view'] = 'upload_image/image_upload';
            redirect('user#step4',compact('upload_error'));
            //$this->load->view('user#step4', $data);
        }
//         $upload_error = $this->upload->display_errors();
//            //$data['upload_error']=$upload_error;
//                   $error =  $this->upload->display_errors();
//
//                    
//                    $this->load->view('registration/user_registration',  compact('upload_error'));
                }
              
    

    public function show_image() {

        $result = $this->property_model->show_upload_image();
        print_r($result);
        $this->load->view('upload_image/shoe_upload_image', compact('result'));
    }

    public function upload_profile_image() {

        $config = [
            'upload_path' => './uploads/',
            'allowed_types' => 'jpg|gif|png|jpeg',
        ];
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $data = $this->upload->data();
      
        $names = base_url("uploads/" . $data['raw_name'] . $data['file_ext']);
        //print_r($names);

        $db_data = array(
            'image_path' => $names,
        );
        $image = $this->session->userdata('user_id');
        //  print_r($image);
        $this->db->where('id', $image);
        $insert = $this->db->update('tbl_user_register', $db_data);
        print_r($insert);
        //exit;
        if (!$this->upload->do_upload('userfile')) {


            redirect('admin_dashbord/upload_profile_image');
        } else {

            redirect('Admin_dashbord/show_upload_img');
        }
    }
     public function document() {

        $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach ($_FILES as $key => $value)
            for ($s = 0; $s <= $count - 1; $s++) {

                $_FILES['userfile']['name'] = $value['name'][$s];
                $_FILES['userfile']['type'] = $value['type'][$s];
                $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                $_FILES['userfile']['error'] = $value['error'][$s];
                $_FILES['userfile']['size'] = $value['size'][$s];
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $data = $this->upload->data();
                $names = base_url("uploads/" . $data['raw_name'] . $data['file_ext']);
                $db_data = array(
                    'id' => NULL,
                    'name' => $names,
                    'user_id' => $this->session->userdata('user_id'),
                    'form_id' => $this->session->userdata('user_id'));
                $insert = $this->db->insert(' tbl_upload_image', $db_data);
            }
        if ($this->upload->do_upload('userfile')) {

            if ($insert) {

                redirect('home/post_refer');
            } else {
                echo 'no insert';
            }
        } else {
            $upload_error = $this->upload->display_errors();
            $data['upload_error'] = $upload_error;
            $data['_view'] = 'upload_image/image_upload';
            $this->load->view('layout/master', $data);
        }
    }

}

?>
