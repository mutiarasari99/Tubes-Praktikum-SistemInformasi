<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

 public function index()
 {
   
     $data['title']='Data Kelompok';
  $this->load->view('profil_view', $data);
 }

}