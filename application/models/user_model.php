<?php

class user_model extends CI_Model {

    public function insert_property($post) {

        $query = $this->db->insert('tbl_submit_property', $post);
        return $this->db->insert_id();
    }

    public function insert_property_userid($post) {
        $form_id = $this->session->userdata('form_id');
        //print_r($form_id);
        $data = array(
            'Bedrooms' => $this->input->post('Bedrooms'),
            'Balconies' => $this->input->post('Balconies'),
            'Floor_No' => $this->input->post('Floor_No'),
            'Total_Floor' => $this->input->post('Total_Floor'),
            'Furnished_Status' => $this->input->post('Furnished_Status'),
            'Bathrooms' => $this->input->post('Bathrooms'),
            'Floors_Allowed' => $this->input->post('Floors_Allowed'),
            'no_open_side' => $this->input->post('no_open_side'),
            'road_width' => $this->input->post('road_width'),
            'Hospital_distance' => $this->input->post('Hospital_distance'),
            'School_distance' => $this->input->post('School_distance'),
            'Airport_distance' => $this->input->post('Airport_distance'),
            'City_distance' => $this->input->post('City_distance'),
            'Railway_Station_distance' => $this->input->post('Railway_Station_distance'),
            'Parking' => $this->input->post('Parking'),
            'cover_parkings' => $this->input->post('cover_parkings'),
            'open_parkings' => $this->input->post('open_parkings'),
            'area_per_sq' => $this->input->post('area_per_sq'),
            'Covered_Area' => $this->input->post('Covered_Area'),
            'plot_area_sq' => $this->input->post('plot_area_sq'),
            'plot_area' => $this->input->post('plot_area'),
            'plot_Length' => $this->input->post('plot_Length'),
            'Plot_Breadth' => $this->input->post('Plot_Breadth'),
            'Carpet_Area_sq' => $this->input->post('Carpet_Area_sq'),
            'Carpet_Area' => $this->input->post('Carpet_Area')
        );

        $this->db->where('id', $form_id);
        $q = $this->db->update('tbl_submit_property', $data);

        // print_r($q);
        return $q;
    }

    public function insert_property_userid3() {
        $form_id = $this->session->userdata('form_id');
        // print_r($form_id);

        $data = array(
            'Transaction_Type' => $this->input->post('Transaction_Type'),
            'Possession_Status' => $this->input->post('Possession_Status'),
            'possession_date' => $this->input->post('possession_date'),
            'Available_month' => $this->input->post('Available_month'),
            'Available_Year' => $this->input->post('Available_Year'),
            'age_of_Construction' => $this->input->post('age_of_Construction'),
            'Expected_Price' => $this->input->post('Expected_Price'),
            'price_per_sqr' => $this->input->post('price_per_sqr'),
            'Other_Charges' => $this->input->post('Other_Charges'),
            'Booking_Token' => $this->input->post('Booking_Token'),
            'Maintenance_Charges' => $this->input->post('Maintenance_Charges'),
            'in_rupes' => $this->input->post('in_rupes'),
            'pries' => $this->input->post('pries'),
            'Charges_per_month' => $this->input->post('Charges_per_month'),
        );

        $this->db->where('id', $form_id);
        $q = $this->db->update('tbl_submit_property', $data);

        // print_r($q);
        return $q;
    }

    public function admin_user_refer($post) {

        $query = $this->db->insert('tbl_refer_admin_user', $post);
        return $query;
    }

    public function admin_refer_person() {

        $user_id = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('tbl_time_shedule');
        $this->db->join('tbl_refer_admin_user', 'tbl_refer_admin_user.time_shedul_id = tbl_time_shedule.id', 'right outer');
        $this->db->where('tbl_refer_admin_user.admin_user_id', $user_id);
        $query = $this->db->get();
        return $query->result_array();

        //SELECT r.id, r.time_shedul_id,r.admin_user_id, t.username, t.mobile,t.email,t.datepicker,t.visittime FROM tbl_refer_admin_user as r INNER JOIN tbl_time_shedule as t ON r.time_shedul_id=t.id
    }

    public function refer_person_table() {

        $user_id = $this->session->userdata('user_id');
        //echo $user_id;
        $this->db->where('referens_id', $user_id);
        $query = $this->db->get('tbl_post_reference');
        // print_r($query);
        return $query->result_array();
    }

    public function admin_post_refer($post, $assign_id) {

        $query = $this->db->insert('tbl_post_refer_person_assign', $post, $assign_id);
        return $query;
    }

    public function admin_post_refer_tbl() {

        $user_id = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('tbl_post_reference');
        $this->db->join('tbl_post_refer_person_assign', 'tbl_post_refer_person_assign.post_referns_id = tbl_post_reference.id', 'right outer');
        $this->db->where('tbl_post_refer_person_assign.admin_user_id', $user_id);
        $query = $this->db->get();
        return $query->result_array();

        //SELECT r.id, r.time_shedul_id,r.admin_user_id, t.username, t.mobile,t.email,t.datepicker,t.visittime FROM tbl_refer_admin_user as r INNER JOIN tbl_time_shedule as t ON r.time_shedul_id=t.id
    }

    public function notification_admin_user($post) {

        $query = $this->db->insert('tbl_notification_admin_user', $post);
        return $query;
    }

    public function notification() {
        $user_id = $this->session->userdata('user_id');
        $this->db->select('feedback');
        $this->db->where('assign_id', $user_id);
        $query = $this->db->get('tbl_notification_admin_user');
        return $query->result_array();
    }

    public function delete_upload_photo() {
        $form_id = $this->session->userdata('form_id');
        // print_r($form_id);

        $this->db->where('form_id', $form_id);
        $query = $this->db->get('tbl_upload_image');
        return $query->result();
    }

    public function delete_uplosd_photo_user($id) {

        $id = $this->uri->segment(3);
        print_r($id);
        $this->db->where('id', $id);
        $q = $this->db->delete(' tbl_upload_image');
        return $q;
    }

    public function funcname($id) {
        $this->db->select('*');
        $this->db->from('Album a');
        $this->db->join('Category b', 'b.cat_id=a.cat_id', 'left');
        $this->db->join('Soundtrack c', 'c.album_id=a.album_id', 'left');
        $this->db->where('c.album_id', $id);
        $this->db->order_by('c.track_title', 'asc');
        $query = $this->db->get();
    }

    public function notification_all() {
//     $user_id= $this->session->userdata('user_id');
//     $this->db->select('*');
//     $this->db->from('tbl_notification_admin_user');
//     $this->db->join('tbl_post_reference','tbl_post_reference.id = tbl_notification_admin_user.post_person_id', 'left outer'); 
//     $this->db->join('tbl_user_register','tbl_user_register.id = tbl_notification_admin_user.send_notifcation_id', 'left outer'); 
//     $this->db->where('tbl_user_register.send_notifcation_id',$user_id);
//     $query = $this->db->get();
//     return $query->result_array();

        $user_id = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('tbl_notification_admin_user');
        //$this->db->join('tbl_post_reference', 'tbl_post_reference.id =  tbl_notification_admin_user.post_person_id','right outer');
        $this->db->join('tbl_user_register', ' tbl_user_register.id = tbl_notification_admin_user.send_notifcation_id', 'right outer');
//      $this->db->where('tbl_notification_admin_user.read_me',0);
        $this->db->or_where('tbl_notification_admin_user.admin_user_id',$user_id);
        $this->db->or_where('tbl_notification_admin_user.admin', $user_id);
        $this->db->or_where('tbl_notification_admin_user.referens_id', $user_id);
        $this->db->or_where('tbl_notification_admin_user.post_person_id', $user_id);
        $this->db->or_where('tbl_notification_admin_user.propert_woner_id', $user_id);
        $this->db->or_where('tbl_notification_admin_user.admin_user_id',$user_id);
        //$this->db->order_by("id", "asc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function fetch_property() {
        $this->db->select('*');
        $this->db->from('tbl_upload_image');
        $this->db->join(' tbl_submit_property', 'tbl_submit_property.id  =  tbl_upload_image.form_id', 'left outer');
        $query = $this->db->get();
        return $query->result();
    }

    public function register_no_of() {
        $this->db->where("readd_me", 0);
        $register_date = date(" jS F Y ");
        $this->db->where('register_date', $register_date);
        $query = $this->db->get('tbl_user_register');

        return $query->result_array();
    }

    public function update_bank_details() {
        $id = $this->session->userdata('user_id');
//        $id= $this->session->userdata('user_id');
        $this->db->where('user_id', $id);
        $query = $this->db->get('tbl_bank_details');
        return $query->row();
    }

    public function update_bank_detail() {
        $data = array(
            'username' => $this->input->post('username'),
            'bank_name' => $this->input->post('bank_name'),
            'Account_Number' => $this->input->post('Account_Number'),
            'Branch_Name' => $this->input->post('Branch_Name'),
            'ifsc_code' => $this->input->post('ifsc_code')
        );
        $id = $this->session->userdata('user_id');
        $this->db->where('user_id', $id);
        $query = $this->db->update('tbl_bank_details', $data);

        return $query;
    }

    public function property() {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('tbl_submit_property');

        return $query->result();
    }

    public function property_details($id) {

        $this->db->where('id', $id);
        $query = $this->db->get('tbl_submit_property');
        return $query->row();
    }

    public function get_images($id) {
        $this->db->where('form_id', $id);
        $query = $this->db->get('tbl_upload_image');
        return $query->result_array();
    }

    public function update_ntf() {
        $data = array(
            'read_me' => 1
        );
        $dataa = array(
            'referr_me' => 1
        );
        $dataaa = array(
            'prow_me' => 1
        );
        $dataaaa = array(
            'post_me' => 1
        );
        $user_id = $this->session->userdata('user_id');
        if ($this->session->userdata('user_type') == "admin") {
            $field = "assign_id";
            $this->db->where($field, $user_id);
            $query = $this->db->update('tbl_notification_admin_user', $data);
        } else if ($this->session->userdata('user_type') == "Reference") {
            $field = "referens_id";
            $this->db->where($field, $user_id);
            $query = $this->db->update('tbl_notification_admin_user', $dataa);
        } else if ($this->session->userdata('user_type') == "Seller_Buyer") {
            $field = "propert_woner_id";
            $this->db->where($field, $user_id);
            $query = $this->db->update('tbl_notification_admin_user', $dataaa);
        } else if ($this->session->userdata('user_type') == "Builder") {
            $field = "propert_woner_id";
            $this->db->where($field, $user_id);
            $query = $this->db->update('tbl_notification_admin_user', $dataaa);
        } else {
            $field = "admin_user_id";
            $this->db->where($field, $user_id);
            $query = $this->db->update('tbl_notification_admin_user', $dataaaa);
        }
    }

    public function see_notification($id) {
        $this->db->where('send_notifcation_id', $id);
        $query = $this->db->get('tbl_notification_admin_user');
        return $query->result_array();
    }

    public function count_ntf() {
        //echo 'hello';
        $id = $this->session->userdata('user_id');
        $user_type = $this->session->userdata('user_type');
        if ($user_type == "admin") {

            $this->db->where("read_me", 0);
            $this->db->where('admin', $id);
            $query = $this->db->get('tbl_notification_admin_user');
            return $query->result_array();
        } elseif ($user_type == "Reference") {
            $this->db->where("referr_me", 0);
            $this->db->where('referens_id', $id);
            $query = $this->db->get('tbl_notification_admin_user');
            return $query->result_array();
        } elseif ($user_type == "Seller_Buyer") {
            $this->db->where("prow_me", 0);
            $this->db->where('propert_woner_id', $id);
            //$this->db->where('referens_id',$id);
            $query = $this->db->get('tbl_notification_admin_user');
            return $query->result_array();
        } elseif ($user_type == "Builder") {
            $this->db->where("prow_me", 0);
            $this->db->where('propert_woner_id', $id);
            //$this->db->where('referens_id',$id);
            $query = $this->db->get('tbl_notification_admin_user');
            return $query->result_array();
        } else {
            //echo 'sorry';
             $this->db->where("post_me", 0);
            $this->db->where('admin_user_id', $id);
            //$this->db->where('referens_id',$id);
            $query = $this->db->get('tbl_notification_admin_user');
            return $query->result_array();
        }
    }

    public function chang_ntf() {
        $data = array(
            'readd_me' => 1
        );
        $this->db->where("readd_me", 0);
        $query = $this->db->update('tbl_user_register', $data);
        echo $query;
        exit;
    }
    public function admin_user_feedback($post){
        echo 'hello';
      $q=$this->db->insert('tbl_notification_admin_user',$post);
      return $q;
    }
   
    public function search($location,$pries){
        
        $this->db->select('*');
        $this->db->from('tbl_submit_property');
        $this->db->like('location',$location);
        $this->db->or_like('pries',$pries);
        $query= $this->db->get();
        return  $query->result();
    }
    public function search_home($location,$pries){
        $this->db->select('*');
        $this->db->from('tbl_submit_property');
        $this->db->like('location',$location);
        $this->db->or_like('pries',$pries);
        $query= $this->db->get();
        return  $query->result();
    }
    public function search_home_first($location,$plot_size,$corpet_area,$min_price,$max_price){
           
        $this->db->where('location',$location);
        $this->db->where('pries >=',$min_price);
        $this->db->where('pries <=',$max_price);
        $this->db->or_where('plot_area',$plot_size);
        $this->db->or_where('Carpet_Area_sq',$corpet_area);
        $query=$this->db->get('tbl_submit_property');
        return $query->result();
        
    }
}
    