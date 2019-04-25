<?php

/*
 * @author Yang 
 */

class Marca_model extends CI_Model {

    const table = 'marca';

    //Read
    public function getAll() {
        $this->db->select('*,(SELECT COUNT(marca_id) FROM veiculo WHERE marca_id=marca.id)as produtos');
        $query = $this->db->get(self::table);
        return $query->result();
    }

    //Insert
    //Passa $data no conttroller como array
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

    //Update Get_Id
    public function getId($id) {
        $this->db->where('id', $id);
        $query = $this->db->get(self::table);
        return $query->row(0);
    }

    //Update
    public function update($id, $data = array()) {
        //Valida
        if ($id > 0) {
            $this->db->where('id', $id);
            $this->db->update(self::table, $data);
            return $this->db->affected_rows();
        } else {
            return FALSE;
        }
    }

}

?>