<?php

class Admin_model extends CI_Model {

    public function delete_user_registration($id) {

        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $q = $this->db->delete(' tbl_user_register');
        return $q;
    }

    public function delete_post_refers($id) {

        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $q = $this->db->delete(' tbl_post_reference');

        $this->db->where('post_referns_id', $id);
        $this->db->delete(' tbl_post_refer_person_assign');
        return $q;
    }

    public function delete_bank_details($id) {

        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $q = $this->db->delete(' tbl_bank_details');
        return $q;
    }

    public function delete_user_time_shedul($id) {

        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $q = $this->db->delete('tbl_time_shedule');
        $this->db->where('time_shedul_id', $id);
        $this->db->delete(' tbl_refer_admin_user');
        return $q;
    }

    public function delete_admin_user($id) {

        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $q = $this->db->delete('  tbl_user_register');
        return $q;
    }

    public function view_refers_details($id) {

        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_user_register');
        return $query->row();
    }

    public function admin_user_update($id) {
        $id = $this->uri->segment(3);
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'user_type' => $this->input->post('user_type'),
        );

        $this->db->where('id', $id);
        $q = $this->db->update('tbl_user_register', $data);

        // print_r($q);
        return $q;
    }

    public function referens_datails() {
        $id = $this->uri->segment(3);
        $this->db->where('referens_id', $id);
        $query = $this->db->get('tbl_post_reference');
        return $query->result_array();
    }
     public function builder_delete_user($id) {
        
        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $q = $this->db->delete(' tbl_builder_register');
        return $q;
    }
     public function delete_user_property($id) {
        
        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $q = $this->db->delete('tbl_submit_property');
        return $q;
    }

}
