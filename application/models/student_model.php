<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student_model extends CI_Model{
    public function getAllStudents(){
        $this->db->select('*');
        $this->db->from('student');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }
}
?>