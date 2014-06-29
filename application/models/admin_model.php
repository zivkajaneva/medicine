<?php
class Admin_model extends CI_Model
{

	function podatoci()
	{	  
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id',$this->session->userdata('userid'));
		$q=$this->db->get();
		
		foreach ($q->result() as $row) 
		{
			$data[]=$row;
		}
		return $data;

	}

	function addAdmin()
	{	
		$shifra=$this->input->post('shifra');
		$ime=$this->input->post('ime');
		$prezime=$this->input->post('prezime');
		$username=$this->input->post('username');
		$lozinka=sha1($this->input->post('lozinka'));
		$mail=$this->input->post('mail');
		$telefon=$this->input->post('telefon');
		$mesto=$this->input->post('mesto');

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username',$username);
		$q=$this->db->get();
		if($q->num_rows()>0)
		{
			$msg="Внесете друго корисничко име бидејки тоа веке постои";
			return $msg;
		}
		else
		{
		 	$data = array(
				'id'          =>'',
				'ime'         =>$ime,
				'prezime'     =>$prezime,
				'grad'        =>$mesto,
				'username'    =>$username,
				'lozinka'     =>$lozinka,
				'email'       =>$mail,
				'telefon'     =>$telefon,
				'shifra'      =>$shifra,
				'privilegii'  =>'1'
				
			);

		$rez=$this->db->insert('users', $data);
		$msg="Вашите податоци се успешно внесени";
		return $msg;
		}

		
	}

	function addLekar()
	{
		$shifra=$this->input->post('shifra');
		$ime=$this->input->post('ime');
		$prezime=$this->input->post('prezime');
		$username=$this->input->post('username');
		$lozinka=sha1($this->input->post('lozinka'));
		$mail=$this->input->post('mail');
		$telefon=$this->input->post('telefon');
		$mesto=$this->input->post('mesto');

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username',$username);
		$q=$this->db->get();
		if($q->num_rows()>0)
		{
			$msg="Внесете друго корисничко име бидејки тоа веке постои";
			return $msg;
		}
		else
		{
		$data = array(
				'id'          =>'',
				'ime'         =>$ime,
				'prezime'     =>$prezime,
				'grad'        =>$mesto,
				'username'    =>$username,
				'lozinka'     =>$lozinka,
				'email'       =>$mail,
				'telefon'     =>$telefon,
				'privilegii'  =>'2',
				'shifra'      =>$shifra
			);

		$rez=$this->db->insert('users', $data);
		$msg="Вашите податоци се успешно внесени";
		return $msg;
		}
	}

	function check()
	{	
		//prebaruvaj po ime
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('ime',$this->input->post('vrednost'));
		$q=$this->db->get();
		foreach ($q->result() as $row) 
		{
			$data[]=$row;
		}

		return $data;

	}

	function delete($segment)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id',$segment);
		$q = $this->db->get();
		if($q->num_rows()>0)
		{
			$this->db->where('id',$segment);
	      	$this->db->delete('users');
	      	$msg = "Корисникот е избришан";
 		  	return $msg;
 		}
	}

	function addPacient()
	{
		$ime=$this->input->post('ime');
		$prezime=$this->input->post('prezime');
		$majka=$this->input->post('majka');
		$tatko=$this->input->post('tatko');
		$mominsko=$this->input->post('mominsko');
		$data=$this->input->post('data');
		$data2=strtotime($data);
		$mestorag=$this->input->post('mestorag');
		$mbr=sha1($this->input->post('mbr'));
		$vreme=$this->input->post('vreme');
		$telefon=$this->input->post('telefon');
		$mestozivee=$this->input->post('mesto');

		$data=array(
			'id'                    =>'',
			'ime'                   =>$ime,
			'prezime'               =>$prezime,
			'majka'                 =>$majka,
			'tatko'                 =>$tatko,
			'mominsko_prezime'      =>$mominsko,
			'data_raganje'          =>$data2,
			'mesto_raganje'         =>$mestorag,
			'maticen_broj'          =>$mbr,
			'vreme_raganje'         =>$vreme,
			'mesto_ziveenje'        =>$mestozivee,
			'telefon'               =>$telefon,
			'lekar_id'              =>'0',
			'admin_id'              =>$this->session->userdata('userid')
			);
		$this->db->select('*');
		$this->db->from('pacienti');
		$rez=$this->db->insert('pacienti',$data);
		
		
	}

}
?>