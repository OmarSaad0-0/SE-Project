<?php
class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index', $data);
    }
    public function about() {
        $this->view('about');
    }

    public function Select(){
        $data = [
            'title' => 'Home page'
        ];

        $this->view('users/Select',$data);
    }

    public function hoodie(){
        $data = [
            'title' => 'Home page'
        ];

        $this->view('users/hoodie',$data);
    }
    public function sizing(){
        $data = [
            'title' => 'Home page'
        ];

        $this->view('users/sizing',$data);
    }

    public function printing(){
        $data = [
            'title' => 'Home page'
        ];

        $this->view('users/printing',$data);
        
    }

    public function type(){
        $data = [
            'title' => 'Home page'
        ];

        $this->view('users/type',$data);
    }

    public function emb(){
        $data = [
            'title' => 'Home page'
        ];

        $this->view('users/emb',$data);
    }

    public function hood(){
        $data = [
            'title' => 'Home page'
        ];

        $this->view('users/hood',$data);
    }

}
