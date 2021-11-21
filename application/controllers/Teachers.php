<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teachers extends CI_Controller {
    function __construct() {
        parent::__construct();

 
        /* Standard Codeigniter Libraries */
        $this->load->database();
        $this->load->helper('url'); 
 
        $this->load->library('grocery_CRUD');    
    }
 
    private function _example_output($output = null) {
        $this->load->view('Teachers.php',$output);    
    }
 
    public function index() {
        $crud = new grocery_CRUD();

		$crud->fields('name');
		$crud->add_fields('name', 'id');
		$crud->edit_fields('name', 'id');
        $crud->set_table('Teachers');

        $crud->display_as('id','Student');

        $crud->set_relation('id', 'Students', 'id');
     
        $output = $crud->render();
 
        $this->_example_output($output);

    }
}