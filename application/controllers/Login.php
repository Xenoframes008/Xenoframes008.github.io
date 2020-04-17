<?php

class Login extends CI_Controller {

    public function index() {

        // echo 'hello welcome on userlogin page';
        if ($this->session->userdata('user_id')) {

            return redirect('user/property1');
        }
        $this->load->view('login/login_in');
    }

    public function sign_up() {//user sign up 
        $this->form_validation->set_rules('username', 'UserName', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|valid_emails|is_unique[tbl_user_register.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required|is_unique[tbl_user_register.mobile]');
        $this->form_validation->set_rules('user_type', 'User Type', 'required|is_unique[tbl_user_register.mobile]');
       
        $post = $this->input->post();
       
         $register_date=date(" jS F Y ");
      
        $post['register_date']= $register_date;
         $image_path='http://localhost/property/uploads/jadhav2.png';
         $post['image_path']=$image_path;
//        echo '<pre>';
//        print_r($post);
//        exit;
        unset($post['confirm_password']);

        //$user=  $this->input->post('username');
        //print_r($post);
        if ($this->form_validation->run()) {
            $this->load->model('login_model');
            $login_id = $this->login_model->sign_up_data($post);

            if ($login_id) {

                $this->session->set_flashdata('success', 'Register successfully ');
                echo 'inser recored';

                redirect('login ');
            } else {
                echo 'no insert';
            }
            //$data = array('upload_data' => $this->upload->data());
            // redirect('admin_dashbord/dashbord');
        } else {
            $this->load->view('login/register');
        }
    }

    public function login_user() {
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('login_model');
            $login = $this->login_model->check_user_login($username, $password);

            if ($login) {
               $info =array(
                   
                   'user_id'  => $login['id'],
                   'username' => $login['username'],
                   'email'    => $login['email'],
                   'mobile'   => $login['mobile'],
                   'user_type'=> $login['user_type'],
               );
               $this->session->set_userdata($info);
               $uaer_type=$this->session->userdata('user_type');
             
               echo $user_type;
               echo '<br>';
               if($uaer_type=="admin"){
                   
                    echo 'admin user';
                    redirect('Admin_dashbord/show_upload_img');
                    
                }elseif ($uaer_type=="Reference") {
                    
                    echo 'user Reference ';
                 redirect('Admin_dashbord/show_upload_img');
                 
                } elseif ($uaer_type=="Builder") {
                    
                    echo 'user Builder';
                     redirect('Admin_dashbord/show_upload_img');
                    
                }elseif ($uaer_type=="Seller_Buyer") {
                    
                    echo 'user Seller_Buyer  ';
                    
                     redirect('Admin_dashbord/show_upload_img');
                    
                }else {
                     redirect('Admin_dashbord/show_upload_img');
                    //echo 'sorroy user not be valide';
                
            }
            } else {

                $this->session->set_flashdata('login_failed', 'Invalide Username and Password');
                echo 'password not match';
                redirect('login');
            }
        } else {
            // $this->session->set_flashdata('Lorin_failed', 'User Name and Password not match ');

            $this->load->view('login/login_in');
        }
    }

    public function logout() {

        $this->session->unset_userdata('user_id');
        return redirect('home');
    }

    public function forget_password() {


        $email = $this->input->post('email');
        //print_r($email);
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run()) {
            $emial= $this->input->post('email');
            $rsult=$this->login_model->retrieve_passwprd($emial);
            echo 'Your pasword is ';
             echo   $rsult->password ;
          
           
        } else {

            $this->load->view('login/forget_pass');
        }
        //echo 'hello welcome on forget password';
    }

    public function change_passw() {

        $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');


        $post = $this->input->post();
        unset($post['confirm_password']);
        //$user=  $this->input->post('username');
        //print_r($post);
        if ($this->form_validation->run()) {

            $this->load->model('login_model');
            $login_id = $this->login_model->change_password();
            if ($login_id) {

                echo 'inser recored';

                //redirect('login ');
            } else {
                echo 'no insert';
            }
            //$data = array('upload_data' => $this->upload->data());
            redirect('admin_dashbord/show_upload_img');
        } else {
            // $this->load->view('login/change_password');

            $data['_view'] = 'login/change_password';
            $this->load->view('layout/master', $data);
        }
    }

    public function admin_sign_up() {//user sign up 
        $this->form_validation->set_rules('username', 'UserName', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|valid_emails|is_unique[tbl_user_register.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required|is_unique[tbl_user_register.mobile]');

        $post = $this->input->post();
        $image_path = 'http://localhost/property/uploads/jadhav.png';
        $post['image_path'] = $image_path;
        //echo '<pre>';
        //print_r($post);
        unset($post['confirm_password']);

        //$user=  $this->input->post('username');
        //print_r($post);
        if ($this->form_validation->run()) {


            $this->load->model('login_model');
            $login_id = $this->login_model->sign_up_data($post);

            if ($login_id) {

//$this->session->set_flashdata('success','Register successfully ');
                echo 'inser recored';

                redirect('Osumare_admin_dashbord/admin_mangement_table ');
                
            } else {
                echo 'no insert';
            }
            //$data = array('upload_data' => $this->upload->data());
            // redirect('admin_dashbord/dashbord');
        } else {

            $data['_view'] = 'admin/admin_user_registration';
            $this->load->view('layout/master', $data);
        }
    }


}

?>
