<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);

class Lekar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(false);
		$this->session->set_flashdata('redirect',$this->uri->uri_string());
		
		if($this->session->userdata('logged'))
		{
			if($this->session->userdata('userl')==2)
			{

			}
			else
			{
				redirect('login');
			}
		}
		else
		{
			redirect('login');
		}
	}

	function index()
	{
		$this->load->model('lekar_model','lekar');
		$prom=$this->lekar->home();
		$data['page']='lekar/lekarHome';
		$data['pod']=$prom;
		$this->load->view('pom',$data);
	}

	
	function novPacient()
	{
		$this->load->model('lekar_model','lekar');
		if($this->input->post('submit'))
		{
			$pod= $this->lekar->novPacient();
			$this->session->set_userdata('msg',$pod);
			redirect('lekar/novPacient');
		}
		$data['page']='lekar/novPacient';
		
		$this->load->view('pom',$data);
	}

	function prikaziPregledi() 
	{
		$this->load->model('lekar_model','lekar');
		
		if($this->input->post('submit'))
		{
			$prom=$this->lekar->pregledi();
		}
		$data['pod']=$prom;
		$data['page']='lekar/prikaziPregledi';
		$this->load->view('pom',$data);
	}

	function pregled()
	{
		$data['page']='lekar/pregled';
		$this->load->view('pom',$data);
	}


}
?>