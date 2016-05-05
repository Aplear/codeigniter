<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Authorize extends CI_Controller {

    public $data = array();

    function __construct()
    {
        $this->data = [
            'output' => '' ,
            'js_files' => array() ,
            'css_files' => array()
        ];
        parent::__construct();
    }
    /**
     * Index Adminpanel for this controller.
     *
     */
    public function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->data['role'] = $session_data['role'];
            $this->load->view('backend/index', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            $this->load->view('backend/login');
        }
        
    }

    public function login()
    {
        $this->data=[
            'email' => $this->input->post('email',TRUE),
            'password' => $this->input->post('password'),
        ];
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean|callback_checkPassword');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/login',$this->data);
        } else {
            redirect('authorize', 'refresh');
        }


    }
    public function checkPassword($password)
    {
        $email = $this->input->post('email');
        $this->load->model('users_model');
        $query = $this->users_model->getUserByEmail($email);

        if (password_verify($password, $query['password'])) {

            $sess_array = array(
                'id' => $query['id'],
                'email' => $query['email'],
                'role' => $query['role']
            );
            $this->session->set_userdata('logged_in', $sess_array);
            return TRUE;
        } else {
            $this->form_validation->set_message('checkPassword', 'Invalid username or password');
            return false;
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('authorize', 'refresh');
    }

}
