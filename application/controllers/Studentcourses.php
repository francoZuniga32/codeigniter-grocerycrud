<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studentcourses extends CI_Controller {
    function __construct() {
        parent::__construct();

 
        /* Standard Codeigniter Libraries */
        $this->load->database();
        $this->load->helper('url'); 
 
        $this->load->library('grocery_CRUD');    
    }
 
    private function _example_output($output = null) {
        $this->load->view('StudentCursesAdd.php',$output);    
    }

    public function list(){
        $this->load->view('StudentCourses.php');
    }

    public function draw(){
         // Datatables Variables
         $draw = intval($this->input->get("draw"));
         $start = intval($this->input->get("start"));
         $length = intval($this->input->get("length"));


         $cursos = $this->db->query('SELECT Students.name as StudentName, Courses.name as CourseName FROM StudentCourses, Students, Courses WHERE Students.id = StudentCourses.student_id AND StudentCourses.course_id = Courses.id');

         $data = array();

         foreach($cursos->result() as $r) {
              $data[] = array(
                   $r->StudentName,
                   $r->CourseName,
              );
         }

         $output = array(
              "draw" => $draw,
                "recordsTotal" => $cursos->num_rows(),
                "recordsFiltered" => $cursos->num_rows(),
                "data" => $data
           );
         echo json_encode($output);
         exit();
    }
}