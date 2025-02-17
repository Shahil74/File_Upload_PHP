<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Upload_model');
    }

    public function index() {
        $this->load->view('upload_form', array('error' => ''));
    }

    public function do_upload() {
        $config['upload_path']   = FCPATH.'/uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
        $config['max_size'] = 10240;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        } else {
            $upload_data = $this->upload->data();

            // Prepare data for database insertion
            $file_data = array(
                'file_name'  => $upload_data['file_name'],
                'file_type'  => $upload_data['file_type'],
                'file_size'  => $upload_data['file_size'],
                'file_path'  => 'uploads/' . $upload_data['file_name'],
                'file_data'  => file_get_contents($upload_data['full_path'])
            );
            

            // Save to database
            $this->Upload_model->save_file($file_data);

            $this->load->view('upload_success', array('upload_data' => $upload_data));
        }
    }
    public function show_files() {
        $data['files'] = $this->Upload_model->get_files();
        $this->load->view('uploaded_files', $data);
    }
}
?>