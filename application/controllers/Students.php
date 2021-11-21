<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {
    function __construct() {
        parent::__construct();

 
        /* Standard Codeigniter Libraries */
        $this->load->database();
        $this->load->helper('url'); 
 
        $this->load->library('grocery_CRUD');    
    }
 
    private function _example_output($output = null) {
        $this->load->view('Student.php',$output);    
    }
 
    public function index() {
        $crud = new grocery_CRUD();
        $crud->set_table('Students');        
        $crud->set_relation_n_n('course', 'StudentCourses', 'Courses', 'student_id', 'course_id', 'name');

        $crud->fields('grado','course','name');
        $crud->unset_columns('created_at');
		$crud->add_fields('name','grado','course');
		$crud->edit_fields('name','grado','course');

        $crud->callback_after_insert(array($this, 'user_after_insert'));

        $output = $crud->render();
 
        $this->_example_output($output);

    }
    
    function user_after_insert($post_array,$primary_key){
        $this->db->set('created_at', date('Y-m-d H:i:s'));
        $this->db->where('id', $primary_key);
        
        $this->db->update('Students');
    
        return true;
    }
}