<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller{

        public function index()
        {
      
        $this->load->view('Layouts/header');
        $this->load->view('home','delete','list','update');
        $this->load->view('Layouts/footer');
    
        }
        public function addUser(){
        
        
        $this->UserModel->addUser();
        $this->load->view('Layouts/header');
        $this->load->view('home');
        $this->load->view('Layouts/footer');
       
    
    }

        public function updateUser(){
            $this->UserModel->updateUser();
           
        
        }

        public function listUser(){
            $users = $this->UserModel->listUsers();
            print_r($users);
           
        
        }
        public function deleteUser(){
           $this->userModel->deleteUser();
           
        
        }
        
        
   

    }


?>