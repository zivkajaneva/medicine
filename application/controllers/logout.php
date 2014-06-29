<?php

class Logout extends CI_Controller{

    function __construct() 
    {

        parent::__construct();

        if($this->session->userdata('userid')=='')
        	{
        		redirect('admin');
           	}
    }

    function index()
    {
    	$this->session->sess_destroy();
    	redirect('login');
    }

}
?>