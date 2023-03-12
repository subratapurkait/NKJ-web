<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // $this->load->library('pagination');
        // $this->load->model('ContactusModel');
        // $this->load->model('UserModel');
        $this->load->model('CommonModel');

        // if($this->session->userdata('LoginID')!='') {
        // 	$_SESSION['countdown'] = 40;
        // 	$_SESSION['time_started'] = date("Y-m-d H:i:s");

        // 	$_SESSION['last_active_time'] = time();
        // 	$end_time = date("Y-m-d H:i:s", strtotime('+'.$_SESSION['countdown'].'minutes', strtotime($_SESSION['time_started']))) ;
        // 	$_SESSION['end_time'] = $end_time; 
        // }
    }

    public function index()
    {
        $this->load->view('home_page');
    }
    public function contact()
    {
        $this->load->view('contact');
    }
    public function portfolio()
    {
        $data['enquiry'] = $this->CommonModel->get_enquiry_data();
        $this->load->view('portfolio', $data );
    }
    public function submitEnquiry()
    {
        $fullname = $this->input->post('fullname');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        // $Campaign_continue = $this->input->post('Campaign_continue');

        $insertData = array(
            'name'             => $fullname,
            'email'            => $email,
            'mobile'                    => $mobile,
            'created_at'                   => strtotime(date('d-m-Y H:i:s')),
        );
        $isInsert = $this->db->insert('enquiry', $insertData);
        if ($isInsert) {
			redirect(base_url('home/portfolio'));	

        } else {
            redirect(base_url());	
        }
    }
}
