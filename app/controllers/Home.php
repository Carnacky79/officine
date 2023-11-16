<?php

    class Home {
        use Controller;
        public function index(){
            $this->view('home');
        }

        public function chisiamo(){
            $this->view('chisiamo');
        }
    }
