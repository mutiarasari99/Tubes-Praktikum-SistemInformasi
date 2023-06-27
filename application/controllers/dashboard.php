<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

 public function index()
 {
    $data['title']='Translator Webtoon';
  $this->load->view('dashboard_view', $data);
 }

}