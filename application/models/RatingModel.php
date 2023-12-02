<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RatingModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_rating($data) {
        // Adiciona a data atual ao array de dados
        $data['created_at'] = date('Y-m-d H:i:s');

        $this->db->insert('ratings', $data);
    }

    public function get_ratings() {
        $this->db->order_by('created_at', 'DESC');
        $query = $this->db->get('ratings');
        return $query->result();
    }
}
?>
