<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('contact');
    }

    public function index()
	{
        $this->form_validation->set_rules('fname', 'Name', 'required|alpha');
        $this->form_validation->set_rules('lname', 'Last Name', 'required|alpha');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[student_details.email_address]');
        $this->form_validation->set_rules('contact_ad', 'Contact Address', 'alpha_numeric_spaces');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('add_contact');
        }else{

            $this->contact->insert_entry();
            redirect('main');
        }
	}
}