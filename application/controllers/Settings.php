<?php

class Settings extends CI_Controller
{
   public function __construct()
   {
       parent::__construct();
       $this->load->model('BranchModel');
       
   }

   public function index()
   {

      $this->load->view('branch/branch.php');
      
   }
    public function branch()
    {
         $branchdata=array(
          
            'name'=>$this->input->post('name'),
            'branch_phone'=>$this->input->post('branch_phone'),
            'branch_location'=>$this->input->post('branch_location')
         );
        $branch=$this->load->model('BranchModel');
        $this->BranchModel->create_branch($branchdata);
     if ($branch) {
        $this->session->set_flashdata('create_product', "Branch is created successfully!");
        redirect('settings');
     } else {
        $this->session->set_flashdata('create_product_failure',"<b>Failed!<b>, We could not save this Branch due to unexpected error.");
        $this->load->view('branch/branch.php');
     }
     
     
       
    }
}