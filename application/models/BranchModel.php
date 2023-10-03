
<?php
class BranchModel extends CI_Model
{
    public function create_branch($branchdata)
    {
       $this->db->insert('Branch', $branchdata);
       
        
    }
}