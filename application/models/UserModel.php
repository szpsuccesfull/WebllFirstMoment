<?php



class UserModel extends CI_Model{


    public function addUser()
    {

        if($this->input->post('name') == null){
            echo "error";
        }
        else
        {

            $name = $_POST['name'];
            $Lastname = $_POST['Lastname'];
            $document= $_POST['document'];
            $dateofbirth = $_POST['dateofbirth'];
            $cityofhome = $_POST['cityofhome'];
            $neighborhood= $_POST['neighborhood'];
            $cell = $_POST['cell'];
            $userData = array(
                'name' =>  $name ,
                'Lastname' => $Lastname,
                'document' => $document,
                'dateofbirth ' => $dateofbirth,
                'cityofhome' => $cityofhome,
                'neighborhood' => $neighborhood,
                'cell' => $cell
            );
            //$this->db->insert("users");
             $this->userModel->addUser($userData);
             $redirect = base_url() . "/home";
             header("location: $redirect");   
             echo '$userData';
             
        }
            

    }
    
    
    public function updateUser()
    
    {

        $id = $this->input->get('id');
        $name = $this->input->post('name');
        $Lastname = $this->input->post('lastname');
        $document = $this->input->post('document');
        $dateofbirth = $this->input->post('dateofbirth');
        $cityofhome = $this->input->post('cityofhome');
        $neighborhood = $this->input->post('neighborhood');
        $cell = $this->input->post('cell');
        $userData = array(
            'id' => $id,
            'name' => $name,
            'lastname' => $Lastname,
            'document' => $document,
            'dateofbirth' => $dateofbirth,
            'cityofhome' => $cityofhome,  
            'neighborhood' => $neighborhood,
            'cell' => $cell 
        );
            $this->userModell->updateUser($userData);
            $redirect = base_url() . "/home";
             header("location: $redirect");   
             echo '$userData';

    }
    
            public function listUsers()
            {
                $response =$this->db->query("SELECT * FROM users")->result();

                 return $response[2];
            }
                 public function deleteUser()
                {
     
                 // $this->db->where('id');
                 //$this->db->deleteUser('users');

                }     
                
    


    }

?>