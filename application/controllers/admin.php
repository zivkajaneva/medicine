<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->output->enable_profiler(false);
		$this->session->set_flashdata('redirect',$this->uri->uri_string());
	

		if($this->session->userdata('logged'))
		{
			if($this->session->userdata('userl')==1)
			{
            
			}else
			{
				redirect('login');
			}

	     }else
	     {
	     	redirect('login');
	     }
	 }


	function index()
	{
		$this->load->model('admin_model','admin');
		$niza= $this->admin->podatoci();
		$data['pod']=$niza;
	  	$data['page']='admin/home';
	    $this->load->view('pom',$data);  
	}

	function addAdmin()
	{
		$this->load->model('admin_model','admin');
		
		if($this->input->post('submit'))
		{
			$niza=$this->admin->addAdmin();
			$this->session->set_userdata('msg',$niza);
			redirect('admin/addAdmin');
    	}

	//	$data['pod']=$niza;
		
		$data['page']='admin/addAdmin';
		$this->load->view('pom',$data);
		
	}

	function addLekar()
	{
		$this->load->model('admin_model','admin');
		if($this->input->post('submit'))
		{
			$niza=$this->admin->addLekar();
			$this->session->set_userdata('msg',$niza);
			redirect('admin/addLekar');
		}
		$data['page']='admin/addLekar';
		$this->load->view('pom',$data);
	}
	
	function delete()
	{
		$this->load->model('admin_model','admin');

		if($this->input->post('search'))
		{
			$niza=$this->admin->check();
		}

		    $segment = $this->uri->segment(3);
            if (!empty($segment))
            {
                $rez = $this->admin->delete($segment);
                $this->session->set_userdata('msg',$rez);
                redirect ('admin/delete');
            }
		$data['pod']=$niza;
		$data['page']='admin/delete';
		$this->load->view('pom',$data);
			
	}

	function addPacient()
	{
		$this->load->model('admin_model','admin');
		if($this->input->post('submit'))
		{
			$rez=$this->admin->addPacient();
		
		
		}
		
		$data['page']='admin/addPacient';
		$this->load->view('pom',$data);
	}
	


}

 ?>