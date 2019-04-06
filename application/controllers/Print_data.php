<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Print_data extends CI_Controller {

  public function pdf(){
     $this->load->model("crud_model");
     $data['users_data'] = $this->crud_model->get_all();

     $this->load->library('pdf');

     $this->pdf->setPaper('A4', 'potrait');
     $this->pdf->filename = "laporan-users.pdf";
     $this->pdf->load_view('users_pdf', $data);
  }

  public function excel(){
    $this->load->model("crud_model");
    $data['users_data'] = $this->crud_model->get_all();
    $this->load->view('users_excel', $data);
  }


}
