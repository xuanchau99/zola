<?php 
    class Post extends CI_Model 
    {
        public function __construct()
        {
            parent::__construct();
        }

        // get Most Popular
        public function getMostPopular()
        {
            $this->db->select('posts.id, posts.title, posts.image, posts.summary, posts.slug, categories.id as category_id, categories.name as category_name, users.name as user_name, users.avatar as avatar')
                        ->limit(3)
                        ->order_by('posts.id', 'DESC')
                        ->where('posts.is_popular',1);
            $this->db->from('posts');
            $this->db->join('categories', 'categories.id = posts.category_id');
            $this->db->join('users', 'users.id = posts.user_id');
            $query = $this->db->get();
            return $query->result(); 
        }

        // get Most Category (Technology)
        public function getTechnology()
        {
            $this->db->select('posts.id, posts.title, posts.image, posts.summary, posts.slug, categories.id as category_id, categories.name as category_name, users.name as user_name, users.avatar as avatar')
                        ->limit(1)
                        ->order_by('posts.publish_time', 'DESC')
                        ->where('posts.is_category',1)
                        ->where('category_id',7);   // where category_id = 7 (Technology)
            $this->db->from('posts');
            $this->db->join('categories', 'categories.id = posts.category_id');
            $this->db->join('users', 'users.id = posts.user_id');
            $query = $this->db->get();
            return $query->result(); 
        }

        // get MoreTechnology
        public function getMoreTechnology($idTechnology)
        {
            $this->db->select('posts.id, posts.title, posts.image, posts.summary, posts.slug, posts.publish_time')
                        ->limit(3)
                        ->order_by('posts.publish_time', 'DESC')
                        ->where('posts.id !=',$idTechnology)
                        ->where('posts.is_category',1)
                        ->where('category_id',7);   // where category_id = 7 (Technology)
            $this->db->from('posts');
            $this->db->join('categories', 'categories.id = posts.category_id');
            $this->db->join('users', 'users.id = posts.user_id');
            $query = $this->db->get();
            return $query->result(); 
        }

        // get Most Category (Travel)
        public function getTravel()
        {
            $this->db->select('posts.id, posts.title, posts.image, posts.summary, posts.slug, posts.publish_time, categories.id as category_id, categories.name as category_name, users.name as user_name, users.avatar as avatar')
                        ->limit(1)
                        ->order_by('posts.publish_time', 'DESC')
                        ->where('posts.is_category',1)
                        ->where('category_id',6);   // where category_id = 6 (Travel)
            $this->db->from('posts');
            $this->db->join('categories', 'categories.id = posts.category_id');
            $this->db->join('users', 'users.id = posts.user_id');
            $query = $this->db->get();
            return $query->result(); 
        }

        // get MoreTravel 
        public function getMoreTravel($idTravel)
        {
            $this->db->select('posts.id, posts.title, posts.image, posts.slug, posts.publish_time')
                        ->limit(3)
                        ->order_by('posts.publish_time', 'DESC')
                        ->where('posts.id !=',$idTravel)
                        ->where('posts.is_category',1)
                        ->where('category_id',6);   // where category_id = 6 (Travel)
            $this->db->from('posts');
            $this->db->join('categories', 'categories.id = posts.category_id');
            $this->db->join('users', 'users.id = posts.user_id');
            $query = $this->db->get();
            return $query->result(); 
        }

        // get Recent News
        public function getRecentNews()
        {
            $this->db->select('*, categories.id as category_id, categories.name as category_name, users.name as user_name, users.avatar as avatar')
                    ->limit(12)
                    ->order_by('posts.publish_time', 'DESC');
            $this->db->from('posts');
            $this->db->join('categories', 'categories.id = posts.category_id');
            $this->db->join('users', 'users.id = posts.user_id');
            $query = $this->db->get();
            return $query->result(); 
        }

        // Post detail
        public function getPostDetail($slug)
        {
            $this->db->select('posts.id, posts.title, posts.image, posts.summary, posts.content, posts.slug, categories.id as category_id, categories.name as category_name, users.name as user_name, users.avatar as avatar')
                        ->where('posts.slug',$slug);
            $this->db->from('posts');
            $this->db->join('categories', 'categories.id = posts.category_id');
            $this->db->join('users', 'users.id = posts.user_id');
            $query = $this->db->get();
            return $query->result();
        }

        // get List Categories
        public function getCategories()
        {
            $this->db->from('categories');
            $this->db->join('posts','posts.category_id = categories.id');
            $this->db->join('users', 'users.id = posts.user_id');
            $this->db->select('*, categories.id as category_id, categories.name as category_name, users.name as user_name, users.avatar as avatar')->limit(12)->order_by('posts.publish_time', 'DESC');
            $query = $this->db->get();
            return $query->result();
        }



        // list users 
        public function sessionUsers($username)
        {
            $this->db->select('*')->where('username',$username);
            $this->db->from('users');
            $query = $this->db->get();
            return $query->first_row('array');
        }

        // get categories
        public function categories()
        {
            $this->db->select('categories.id as category_id, categories.name as category_name');
            $this->db->from('categories');
            $query = $this->db->get();
            return $query->result();
        }

        // get users
        public function users()
        {
            $this->db->select('id as user_id, name as user_name');
            $this->db->from('users');
            $query = $this->db->get();
            return $query->result();
        }

        // store post
        public function storePost($data)
        {
            $query = $this->db->insert('posts', $data);
            return $query; 
        }

        // edit post
        public function editPost($post_id)
        {
            $this->db->select('*,posts.id as post_id, categories.id as category_id, categories.name as category_name, users.name as user_name, users.avatar as avatar');
            $this->db->where('posts.id',$post_id);
            $this->db->from('posts');
            $this->db->join('categories','categories.id = posts.category_id');
            $this->db->join('users', 'users.id = posts.user_id');
            $query = $this->db->get();
            return $query->first_row('array');
        }

        // update post
        public function updatePost($post_id, $data)
        {
            $this->db->where('id', $post_id);       
            $this->db->update('posts', $data);
        }

        // delete post 
        public function deletePost($post_id)
        {
            $this->db->where('id', $post_id);
            $this->db->delete('posts');
        }
    }