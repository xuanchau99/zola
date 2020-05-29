<?php 
    class AdminController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Admin');
        }

        public function formLogin()
        {  
               $data['title'] = 'Login';
               $this->blade->render('admin/blogs/login',$data);
        }  

        public function login()
        {  
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if($this->form_validation->run())
            {
                //true  
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                //model function
                $this->load->model('admin');
                if($this->admin->login($username, $password))
                {
                    $session_data = array('username' => $username);
                    $this->session->set_userdata($session_data);
                    redirect(site_url('admin'));
                }
                else
                {
                    $abc = $this->session->set_flashdata('error', 'Invalid Username and Password!');
                    redirect(base_url('form-login'));
                }
            }
            else
            {
                //false
                $this->formLogin();
            }
        }

        public function logout()
        {
           $this->session->unset_userdata('username');
           redirect(site_url('/'));
        }

        public function view()
        {
            $data['title'] = "Admin";
            return $this->blade->render('admin/blogs/home-admin',$data);
        }
    }