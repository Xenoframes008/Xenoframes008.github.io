<?php

class login_model extends CI_Model {

    public function check_user_login($username, $password) {

        $q = $this->db->where(['email' => $username, 'password' => $password])->get('tbl_user_register');

        if ($q->num_rows()) {
            // echo '<pre>';
            //print_r($q->row());
            return $q->row_array();
            //return TRUE;
        } else {

            return FALSE;
        }
    }

//$this->db->where('name !=', $name);
//$this->db->or_where('id >', $id); 

    public function sign_up_data($post) {

        $ins = $this->db->insert('tbl_user_register', $post);
        return $this->db->insert_id();
    }

    public function get_password($email_id) {
        $forgot_detail = $this->db->select('*')->from('register_master')->where("email_id", $email_id)->get();
        return $forgot_detail->row();
    }

    public function get_user_details() {
        $id = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->where('id', $id);
        $q = $this->db->get('tbl_user_register');
        return $q->row_array();
    }

    public function change_password() {

        $user = $this->login_model->get_user_details();
        // print_r($user);
        $user_id = $this->session->userdata('user_id');
        // print_r($user_id);
        // echo $user_id;
        // exit;
        $data = array(
            'password' => $this->input->post('password')
        );

        $this->db->where('id', $user_id);
        $q = $this->db->update('tbl_user_register', $data);

        //print_r($q);
        return $q;
    }
    public function retrieve_passwprd($emial){
        $this->db->where('email',$emial);
        $query= $this->db->get('tbl_user_register');
        return $query->row();
        
        
    }

}

?>
