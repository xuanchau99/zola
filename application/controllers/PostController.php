<?php 
    class PostController extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            //load model
            $this->load->model('Post');
            $this->load->model('Admin');
        }

        public function view()
        {
            $data['title'] = "Home Page";
            //Call function getMostPopular trong model Post
            $data['listPopular'] = $this->Post->getMostPopular();

            // get MostCategory
            //Call function getTechnology trong model Post
            $listTechnology = $this->Post->getTechnology();
            $data['listTechnology'] = $listTechnology;

            //Call function getTravel trong model Post
            $listTravel = $this->Post->getTravel();
            $data['listTravel'] = $listTravel;

            // get More Travel
            $data['MoreTravel'] = $this->Post->getMoreTravel($listTravel[0]->id);

            // get More Technology
            $data['MoreTechnology'] = $this->Post->getMoreTechnology($listTechnology[0]->id);

            // get Recent New
            $data['RecentNews'] = $this->Post->getRecentNews();
            // print_r($data['MoreTechnology']);
            // die();
            return $this->blade->render('home/homepage', $data);
        }

        // Post detail
        public function postDetail($slug ='')
        {
            $data['title'] = "Post Detail";
            //Call function getMostPopular trong model Post
            $data['PostDetail'] = $this->Post->getPostDetail($slug);

            return $this->blade->render('home/post_detail', $data);
        }

        // List Category
        public function listCategories()
        {
            $data['title'] = "Blog Category";
            $listCategories = $this->Post->getCategories();
            $data['ListCategories'] = $listCategories;
            // print_r($listCategories);
            // die();
            return $this->blade->render('categories/category', $data);
        }

        // List Post (Amin)
        public function listPosts()
        {
            $data['title'] = "List Posts";
            $data['AllPost'] = $this->Admin->listPosts();
            return $this->blade->render('admin/blogs/list-posts',$data);
        }

        // Add Post
        public function add()
        {
            $data['title'] = "Add Post";
            $data['ListCategories'] = $this->Post->categories();
            // print_r($data['ListCategories']);
            // die();
            return $this->blade->render('admin/blogs/add-post',$data);
        }

        // Store Post
        public function store()
        {
            $username = $this->session->userdata('username');
            $user = $this->Post->sessionUsers($username);
            $userID = $user['id'];
            
            $title = $this->input->post('title');
            $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $title);

            $config['upload_path'] = './public/images/'; 
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file_image'))
                {
                    $data = array('error' => $this->upload->display_errors());
                    $this->blade->render('errors/message-error', $data);
                }
            else
            {
                $file_name = $this->upload->data();
                $data_file = array('file_name' => $file_name['file_name']);
                $image = $data_file['file_name'];

                $data = array(
                        'title' => $this->input->post('title'),
                        'summary' => $this->input->post('summary'),
                        'content' => $this->input->post('content'),
                        'image' => 'images/' .$image,
                        'publish_time' => date('Y-m-d H:i:s',now()),
                        'user_id' => $userID,
                        'slug' => $slug,
                        'category_id' => $this->input->post('category_id'),
                        'is_popular' => $this->input->post('is_popular'),
                        'is_category' => $this->input->post('is_category')
                    );
            }

            $this->Post->storePost($data);

            redirect(site_url('admin/list-posts'));

        }

        // Edit Post
        public function edit($post_id = '')
        {
            $data['title'] = "Edit Post";
            
            $data['Post'] = $this->Post->editPost($post_id);
            $data['Categories'] = $this->Post->categories();
            $data['Users'] = $this->Post->users();

            // print_r($data);
            // die();
            return $this->blade->render('admin/blogs/edit-post',$data);
        }

        // Update Post
        public function update($post_id = '')
        {
            $title = $this->input->post('title');
            $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $title);

            if($_FILES['file_image']['name']!="")
            {
                $config['upload_path'] = './public/images/';
                $config['allowed_types'] = 'gif|jpg|png';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file_image'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    return $this->blade->render('errors/message-error', $error);
                }
                else
                {
                    $file_name = $this->upload->data();
                    $data_file = array('file_name' => $file_name['file_name']);
                    $image = 'images/' . $data_file['file_name'];
                }
            }
            else
            {
                $image = $this->input->post('old');
            }
            $data = array(
                    'title' => $this->input->post('title'),
                    'summary' => $this->input->post('summary'),
                    'content' => $this->input->post('content'),
                    'image' => $image,
                    'updated_at' => date('Y-m-d H:i:s',now()),
                    'user_id' => $this->input->post('user_id'),
                    'slug' => $slug,
                    'category_id' => $this->input->post('category_id'),
                    'is_popular' => $this->input->post('is_popular'),
                    'is_category' => $this->input->post('is_category')
                );
            $this->Post->updatePost($post_id, $data);
            $this->session->set_flashdata('update', 'Edit post successful !');
            redirect(site_url('admin/list-posts'));
        }

        // Delete Post
        public function delete($post_id = '')
        {
            $this->Post->deletePost($post_id);
            $this->session->set_flashdata('delete', 'Delete post successful !');
            redirect(site_url('admin/list-posts'));
        }

    }