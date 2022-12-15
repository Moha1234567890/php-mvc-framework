<?php



    class Pages extends Controller{

        public function __construct() {
            $this->postModel = $this->model('post');
        }

        public function index() {

            $posts = $this->postModel->getPosts();

            $data = [
                "title" => "index",
                'posts' => $posts
            ];
            
            
             $this->view('pages/index', $data);
            
        }

        public function about() {


            $data = [
                "title" => "nice"
            ];
            
            $this->view('pages/about', $data);
        }
    }