<?php namespace App\Models;

// use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterFace;

// class Program_Studi_Model extends Model {
class Program_Studi_Model {
    
    private $table = 'tblprodi';

    public function __construct(ConnectionInterface &$db) {
        // $this->db =& $db;

        $this->builder = $db->table($this->table); 
    }
    
    public function get($where = null) { //constructor : method yg pertama kali dipanggil secara otomatis ketika objeknya dibentuk
        // $db = \Config\Database::connect();
        // return $this->db->table($this->table)->get();
        if (!empty($where))
            return $this->builder->getWhere($where);
        else
            return $this->builder->get();
    }

    public function insert($data) {
        return $this->builder->insert($data);
    }

    public function update($data, $where) {
        return $this->builder->update($data, $where);
    }

    public function delete($where) {
        return $this->builder->delete($where);
    }
}