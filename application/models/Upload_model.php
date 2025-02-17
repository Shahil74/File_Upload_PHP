<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Save file data to the database
    public function save_file($data)
    {
        return $this->db->insert('files', $data);
    }

    // Fetch all uploaded files
    public function get_all_files()
    {
        return $this->db->get('files')->result_array();
    }
    public function get_files() {
        return $this->db->get('files')->result();
    }
    

    // Fetch a specific file by ID
    public function get_file_byid($id)
    {
        return $this->db->get_where('files', array('id' => $id))->row_array();
    }
    public function get_file($file_id) {
        return $this->db->get_where('files', array('id' => $file_id))->row();
    }
    

    public function delete_file($id)
    {
        $file = $this->db->get_where('files', ['id' => $id])->row();
        if ($file) {
            if (file_exists($file->file_path)) {
                unlink($file->file_path);
            }
            return $this->db->delete('files', ['id' => $id]);
        }
        return false;
    }
}
