<?php
class HomeController extends CI_Controller{
    public function index(){
        //echo "Hello, This is my first project using codeigniter";
        $this->load->model('student_model');
        $data['data'] = $this->student_model->getAllStudents();
        $this->load->view('student_list', $data);
    }
}
?>