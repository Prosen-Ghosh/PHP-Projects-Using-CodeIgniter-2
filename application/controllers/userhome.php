<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Userhome extends CI_Controller {
  public function index(){
    $this->load->helper('file');
		$totalSiteView = read_file('C:\xampp\htdocs\coder\application\doc\pageview.txt');
		$totalSiteView = intval($totalSiteView);
    //if(!write_file('C:\xampp\htdocs\coder\application\doc\pageview.txt',++$totalSiteView));

    if($this->session->userdata('username') && strtolower($this->session->userdata('category')) == "user"){
      $data['title'] = 'Home';
      $data['totalPageView'] = $totalSiteView;

      $data['username'] = ucfirst($this->session->userdata('username'));
      $this->parser->parse('view_header',$data);
      $this->parser->parse('view_userhome',$data);
      $this->parser->parse('view_footer',$data);
    }
    else {
      redirect('http://localhost/coder/login');
    }
  }
}
