<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Upload_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['files'] = $this->Upload_model->get_all_files();
        $this->load->view('admin_files', $data);
    }
    public function view_file($file_id) {    
        $file = $this->Upload_model->get_file($file_id);
    
        if ($file) {
            header("Content-Type: " . $file->file_type);
            echo $file->file_data;
        } else {
            echo "File not found!";
        }
    }
    
    public function delete($id)
    {
        $this->load->model('Upload_model');
        if ($this->Upload_model->delete_file($id)) {
            $this->session->set_flashdata('success', 'File deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete file.');
        }
        redirect('admin/index');
    }
}
