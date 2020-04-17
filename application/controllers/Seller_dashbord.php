<?php

class Seller_dashbord extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        if (!$this->session->userdata('user_id')) {
            return redirect('login');
        }
    }

    public function index() {

        echo "hello";
    }

}

?>
