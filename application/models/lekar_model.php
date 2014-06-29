<?php
class Lekar_model extends CI_Model
{

	function home()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id',$this->session->userdata('userid'));
		$q=$this->db->get();
		foreach($q->result() as $row)
		{
			$data[]=$row;
		}

		return $data;
	}

	function novPacient()
	{
		$mbr=sha1($this->input->post('mbr'));
		$karton=$this->input->post('karton');
		$this->db->select('*');
		$this->db->from('pacienti');
		$this->db->where('maticen_broj',$mbr);
		$q=$this->db->get();
		if($q->num_rows()>0)
		{
			$this->db->where('maticen_broj',$mbr);
			$this->db->set('`lekar_id`', $this->session->userdata('userid'));
	   		$this->db->set('`br_karton`', $karton);
			$this->db->update('pacienti');
			$msg='Променет е матичниот лекар';
			return $msg;
	    }
	    else 
	    {
	    	$msg='Внесовте грешка матичен број, не постои во базата';
	    	return $msg;
	    }

	}

	function pregledi()  
	{
		$data1=$this->input->post('odData');
		$data2=$this->input->post('doData');
		$data1=strtotime($data1);
		$data2=strtotime($data2);

		$data1 = $data1 + 3600;
		$data2 = $data2 + 89999;

		$this->db->select('
				pacienti.id                 as pid,
				pacient_dosie.id            as pdid,
				terapija.id                 as tid,
				lekovi.id                   as lid,
				pacienti.br_karton          as karton,
				pacienti.ime                as pime,
				pacienti.prezime            as pprezime,
				pacienti.plateno_do         as osigorunanje,
				pacienti.maticen_broj       as embg,
				pacient_dosie.zdravstvena_usluga    as  zdravstvena_usluga,
				pacient_dosie.data_pregled  as  pregled,
				lekovi.br_recept            as recept,
				terapija.opis               as dijagnoza,
				terapija.upat               as upat,
				terapija.boleduvanje_od     as od,
				terapija.boleduvanje_do     as do

			');
		$this->db->from('pacienti');
		$this->db->where('lekar_id',$this->session->userdata('userid'));
		$this->db->join('pacient_dosie','pacienti.id=pacient_dosie.pacient_id');
		$this->db->join('terapija','pacient_dosie.terapija_id=terapija.id');
		$this->db->join('lekovi','terapija.id=lekovi.terapija_id');
		$this->db->where('pacient_dosie.data_pregled >=', $data1);
		$this->db->where('pacient_dosie.data_pregled <=', $data2);
		$q=$this->db->get();
		foreach($q->result() as $row)
		{
			$data[]=$row;
		}
		return $data;
	}



}
?>