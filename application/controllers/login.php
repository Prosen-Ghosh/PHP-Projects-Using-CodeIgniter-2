<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
  public function index(){
    $data['title'] = 'Login';
    $this->load->view('view_header',$data);
    $this->load->view('view_login');
    $this->load->view('view_footer');
  }
}
