<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class AgenceModel extends CI_Model {

    public function agence_all_data()
    {
        return $this->db->select('id,raison_sociale,officeID')->from('agences')->order_by('id','desc')->get()->result();
    }

    public function agence_detail_data($id)
    {
        return $this->db->select('id,raison_sociale,officeID')->from('agences')->where('id',$id)->order_by('id','desc')->get()->row();
    }

    public function agence_create_data($data)
    {
        $this->db->insert('agences',$data);
        return array('status' => 201,'message' => 'Data has been created.');
    }

    public function agence_update_data($id,$data)
    {
        $this->db->where('id',$id)->update('agences',$data);
        return array('status' => 200,'message' => 'Data has been updated.');
    }

    public function agence_delete_data($id)
    {
        $this->db->where('id',$id)->delete('agences');
        return array('status' => 200,'message' => 'Data has been deleted.');
    }

}
