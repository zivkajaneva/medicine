<?php



class Login_model extends CI_Model

{

    function check()

    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $this->input->post('username'));

        $this->db->where('lozinka',SHA1($this->input->post('lozinka')));


        $q=$this->db->get();

        if($q->num_rows()==1)
        {

            foreach ($q->result() as $row) 

            {

                $this->session->set_userdata('logged',1);

                $this->session->set_userdata('userid',$row->id);

                $this->session->set_userdata('userl',$row->privilegii);

                $privilegii=$row->privilegii;

            }

            return $privilegii;

        }

    }

}

?>