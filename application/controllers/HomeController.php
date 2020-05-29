<?php 
    class HomeController extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
        }
        
        // public function index()
        // {
        //  // $data['title'] = "Home Page";
        //  // $this->load->view('home/zola', $data);
        //  $this->blade->render('home/homepage');  //Home page
        // }
        // public function view()
        // {
        //     // $data['abc'] = $this->db->select('*');
        //     // $data['aaa'] = "aaaa000";
        //     //load model
        //     $this->load->model('Home');
        //     //su dung phuong thuc get_list trong user_model
        //     $data['list'] = $this->Home->get_list();
        //     // print_r(var_dump($data));
        //     // die();
        //     return $this->blade->render('home/homepage',$data);
        }
    }