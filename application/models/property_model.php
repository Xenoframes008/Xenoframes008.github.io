<?php

class property_model extends CI_Model {

    public function insert_builder_register($post) {



        $ins = $this->db->insert(' tbl_builder_register', $post);

        return $ins;
    }
    public function update_builder_register($post) {

       
        $data= array(
            
            'Company_name'=> $this->input->post('Company_name'),
            'Ongoing_Project'=> $this->input->post('Ongoing_Project'),
            'Completed_Project'=> $this->input->post('Completed_Project'),
            'director_name'=> $this->input->post('director_name'),
            'director_mobile'=> $this->input->post('director_mobile'),
            'director_email'=> $this->input->post('director_email'),
            'Contact_Person'=> $this->input->post('Contact_Person'),
            'Contact_Person_email'=> $this->input->post('Contact_Person_email'),
            'Contact_Person_mobile'=> $this->input->post('Contact_Person_mobile')

            
        );
            $id= $this->session->userdata('user_id');
            $this->db->where('builder_id',$id);
            $ins = $this->db->update(' tbl_builder_register', $data);

            return $ins;
    }

    public function upload_profile($post) {
        $user = $this->login_model->get_user_details();
        // print_r($user);
        $user_id = $this->session->userdata('user_id');
        print_r($user_id);
        $data = array(
            'image_path' => $this->input->post('userfile')
        );
        $this->db->where('id', $user_id);
        $ins = $this->db->update('tbl_user_register', $data);
        print_r($ins);
        return $ins;
    }

    public function insert_user_register($post) {


        // $this->db->
        $ins = $this->db->insert('tbl_user_register', $post);
        return $ins;
    }

    public function insert_post_referenc($post) {

        $ins = $this->db->insert(' tbl_post_reference', $post);
        return $ins;
    }

    public function update_user() {
        $user = $this->login_model->get_user_details();
        // print_r($user);
        $user_id = $this->session->userdata('user_id');
//        print_r($user_id);
//        echo $user_id;
        // exit;
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'Occupation' => $this->input->post('Occupation'),
            'Religion' => $this->input->post('Religion'),
            'Cast' => $this->input->post('Cast'),
            'City' => $this->input->post('City'),
            'State' => $this->input->post('State'),
            'address' => $this->input->post('address'),
            'Gender' => $this->input->post('Gender'),
            'Marital_Status' => $this->input->post('Marital_Status'),
            'age' => $this->input->post('age'),
            'login_count' =>"1"

        );

        $this->db->where('id', $user_id);
        $q = $this->db->update('tbl_user_register', $data);

        // print_r($q);
        return $q;
    }

    public function show_register_tble() {

        $query = $this->db->get('tbl_user_register');
        return $query->result();
    }

    public function show_post_referenc_tble() {

        $query = $this->db->get('tbl_post_reference');
        return $query->result();
    }

    public function show_image_path() {
//        
        $query = $this->db->get('tbl_upload_image');
        return $query->result();
    }

    public function user_registration_update() {

        // $id   = $this->uri->segment(3);
        $data = array(
            'username' => $this->input->post('username'),
            'mobile' => $this->input->post('mobile')
        );
        $this->session->userdata('id');
        $this->db->where('id', $id);
        $q = $this->db->update('tbl_user_register', $data);


        return $q;
    }

    public function show_upload_image() {

        $query = $this->db->get('tbl_upload_image');
        //return $query->result_array();;
        return $query->row();
    }

    public function time_shedul($post) {

        $ins = $this->db->insert('tbl_time_shedule', $post);
        return $ins;
    }

    public function show_time_shedul_table() {
        $query = $this->db->get('tbl_time_shedule');
        return $query->result();
    }

    public function bank_account($post) {
        $query = $this->db->insert('tbl_bank_details', $post);
        return $query;
    }

    public function bank_detail_table() {
        $query = $this->db->get('tbl_bank_details');
        return $query->result();
    }

    public function admin_mangement() {
        $where = " user_type='HR' OR user_type='Marketing_Person ' OR user_type='Sales_Manager' ";
        $this->db->where($where);
        $query = $this->db->get('tbl_user_register');
        return $query->result();
    }

    public function Reference_Person_Details() {
        $where = " user_type='Reference'";
        $this->db->where($where);
        $query = $this->db->get('tbl_user_register');
        return $query->result();
    }
    public function tbl_todays_register_details(){
        $user=date(" jS F Y ");  
        $this->db->where('register_date',$user);
        $query=$this->db->get('tbl_user_register');
        return $query->result();
       

    }
    
     public function referens(){
        $user=date(" jS F Y ");  
        $referns='refferens';
        $this->db->where('register_date',$user);
        $this->db->where('user_type',$referns);
        $query=$this->db->get('tbl_user_register');
        return $query->result();
       

    }
       public function change_user() {
        $user = $this->login_model->get_user_details();
        // print_r($user);
        $user_id = $this->session->userdata('user_id');
//        print_r($user_id);
//        echo $user_id;
        // exit;
        $data = array(
            'username' => $this->input->post('username')
        );

        $this->db->where('id', $user_id);
        $q = $this->db->update('tbl_user_register', $data);

        // print_r($q);
        return $q;
    }
     public function Reference_Person_profile($id) {
       // $where = " user_type='refferens'";
        $id =$this->uri->segment(3);
        $this->db->where('id',$id);
        $query = $this->db->get('tbl_user_register');
        return $query->row();
    }
    public function document($id) {
       
        $id =$this->uri->segment(3);
//        echo $user_id;exit;
        $this->db->where('user_id',$id);
        $query = $this->db->get('tbl_upload_image');
        return $query->result_array();
    }
     public function Builder_register_table() {
       
        
        $query = $this->db->get('tbl_builder_register');
        return $query->result();
    }
    public function update_builder_info(){
        
        $id= $this->session->userdata('user_id');
        //echo $id;
        $this->db->where('builder_id',$id);
          $query = $this->db->get('tbl_builder_register');
          return $query->row();
    }

}
?>