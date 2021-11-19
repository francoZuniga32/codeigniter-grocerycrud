<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
        parent::__construct();

 
        /* Standard Codeigniter Libraries */
        $this->load->database();
        $this->load->helper('url'); 
 
        $this->load->library('grocery_CRUD');    
    }
 
    private function _example_output($output = null) {
        $this->load->view('empleados.php',$output);    
    }
 
    public function empleados() {
        $crud = new grocery_CRUD();

		$crud->fields('nombre','apellido','dni');
		$crud->add_fields('nombre', 'apellido', 'dni');
		$crud->edit_fields('nombre', 'apellido', 'dni');

        $crud->set_table('data');
     
        $output = $crud->render();
 
        $this->_example_output($output);

    }
}
