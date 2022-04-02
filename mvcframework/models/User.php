<?php
    class User {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function register($data)
        {
        $this->db->query('INSERT INTO users (First_Name, Last_Name, Brand_Name, User_Email, User_Password, User_Number) VALUES (:Fname, :Lname, :Bname, :Uemail, :Upassword, :Unumber)');
        $this->db->bind(':Fname',$data['Fname']);
        $this->db->bind(':Lname',$data['Lname']);
        $this->db->bind(':Bname',$data['Bname']);
        $this->db->bind(':Uemail',$data['Email']);
        $this->db->bind(':Upassword',$data['Password']);
        $this->db->bind(':Unumber',$data['Number']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        
        
        }



        public function login($Email, $password) {
            $this->db->query("SELECT * FROM users WHERE User_Email = :email");
    
            //Bind value
            $this->db->bind(':email', $Email);
    
            $row = $this->db->single();
    
            $hashedPassword = $row->User_Password;
         
            if (password_verify($password, $hashedPassword)) {
                return $row;
            } else {
                return false;
            }
        }

        public function logout(){

            unset($_SESSION['Id']);

            header('location:' . URLROOT . '/users/index');



        }

        public function displayInfo($Id){

            $this->db->query('SELECT * FROM users where Id = :id');
            $this->db->bind(':id', $Id);
            $row = $this->db->single();

            return $row;
            

        }


        public function findUserByEmail($email) {
            //Prepared statement
            $this->db->query('SELECT * FROM users WHERE User_Email = :email');
    
            //Email param will be binded with the email variable
            $this->db->bind(':email', $email);
    
            //Check if email is already registered
            if($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }    
    }
