<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dummy
 *
 * @author Admin
 */
class Dummy extends CI_Controller{
    public function index() {
//           load->view('submit_property');
        $this->load->view('dummy');
    }

}