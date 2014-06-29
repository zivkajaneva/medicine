<?php 

if(!defined('BASEPATH'))  exit ('No direct script access allowed');

//error_reporting(0);



class Login extends CI_Controller

{


    function __construct()

    {

            parent::__construct();



            if($this->session->userdata('logged'))

            {

                switch($this->session->userdata('userl'))

                {

                    case '1':

                    redirect(base_url().'admin');

                    break;

                    case '2':

                    redirect(base_url().'lekar');

                    break;

                    default:

                    redirect(base_url().'login');

                    break;

                }

            }



    }



    function index()
    {

        $this->load->view('loginView');

    }

    
    //verifikacija za logiranje  

    //admin -  1

    //lekar -  2

    function verifikacija()
    {

        $this->load->model('login_model');

        $tmp=$this->login_model->check();



        if($tmp==1)

        {

            redirect(base_url().'admin');

        }

        else if($tmp==2)

        {

            redirect(base_url().'lekar');

        }

        else 

        {

            redirect(base_url().'login');

        }

    }



}

?>