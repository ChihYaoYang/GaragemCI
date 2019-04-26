<?php
/*
 * @author Yang 
 */
class Veiculo_model extends CI_Model {
    const table = 'veiculo';
    //Read
    public function getAll() {
        //$this->db->select('*');
        $this->db->join('marca','marca.id=veiculo.marca_id');
        $query = $this->db->get(self::table);
        return $query->result();
    }
    //Insert
    public function insert($data = array()) {
        $this->db->insert(self::table, $data);
        return $this->db->affected_rows();
    }
    //delete
    public function delete($id) {
        //Valida
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->delete(self::table);
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
}
?>