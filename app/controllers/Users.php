<?php
    class Users extends Controller {

        public function __construct() {
            $this->userModel = $this->model('User');
        }

        public function login() {
            $data = [
                'title' => 'Login page',
                'usernameError' => '',
                'passwordError' => ''
            ];

            $this->view('users/login', $data);
        }
    }
?>