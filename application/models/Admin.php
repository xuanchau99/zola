<?php 
    class Admin extends CI_Model 
    {
        public function __construct()
        {
            parent::__construct();
        }


        public function login($username, $password)
      {  
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $query = $this->db->get('users');
            if($query->num_rows() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
      }

      public function listPosts()
      {
        $this->db->from('posts');
            $this->db->join('categories','posts.category_id = categories.id');
            $this->db->join('users', 'users.id = posts.user_id');
            $this->db->select('*, posts.id as post_id, categories.id as category_id, categories.name as category_name, users.name as user_name, users.avatar as avatar')->order_by('posts.publish_time', 'DESC');
            $query = $this->db->get();
            return $query->result();
      }
    }