<?php
class PositionModel extends CI_Model
{
    public function get_position()
    {
        $q=$this->db->get('position');

         return $q->result();
    }
    
    
}