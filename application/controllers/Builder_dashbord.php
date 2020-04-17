<?php

class Builder_dashbord extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        if (!$this->session->userdata('user_id')) {
            return redirect('login');
        }
    }

    public function index() {
        echo date('Y-m-d H:i:s');
        // echo 'hello evry one ';
    }

}

?>
