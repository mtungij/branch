<?php

class Position  extends CI_Controller

{
 
 public function __construct()
 {
    parent::__construct();
    $this->load->model('PositionModel');
        
 }

 public function index()
 {
   $position = $this->PositionModel->get_position();
   $this->load->view('position/position', ["position" => $position]);
   
    
 }
}
 



