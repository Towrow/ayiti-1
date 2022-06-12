<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thanks extends CI_Controller {

    public function index()
	{
		$this->load->view('emails/thanks');
	}

    public function congrats()
	{
		$this->load->view('emails/thanks');
	}

	public function index_raw()
	{
		echo '<html>
		<head>
			<title>Thank You!</title>
	</head>
	<body>
		<h1>Congratulationscsdfgsfdgfsdgsdfgsdfgsdfgsd!</h1>
	</body>
		</html>';
	}
}