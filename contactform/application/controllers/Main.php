<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact');
    }

    public function index()
	{
        $data['query'] = $this->contact->get_all_contacts();
		$this->load->view('dashboard', $data);
	}
}