<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {
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

		$crud->fields('name');
		$crud->add_fields('name');
		$crud->edit_fields('name');

        $crud->set_table('Courses');
        $crud->callback_after_update(array($this, 'courses_after_update'));
        $crud->callback_after_insert(array($this, 'courses_after_insert'));
     
        $output = $crud->render();
 
        $this->_example_output($output);

    }
    function courses_after_insert($post_array,$primary_key){
        $this->db->set('created_at', date('Y-m-d H:i:s'));
        $this->db->set('updated_ad', date('Y-m-d H:i:s'));
        $this->db->where('id', $primary_key);
        
        $this->db->update('Courses');
    
        return true;
    }
    function courses_after_update($post_array,$primary_key){
        $this->db->set('updated_ad', date('Y-m-d H:i:s'));
        $this->db->where('id', $primary_key);
        
        $this->db->update('Courses');
    
        return true;
    }
}