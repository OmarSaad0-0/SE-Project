<?php
    class User {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function register($data)
        {

        $this->db->query('INSERT INTO users (First_Name, Last_Name, Brand_Name, User_Email, User_Password, User_Number, User_Type) 
        VALUES (:Fname, :Lname, :Bname, :Uemail, :Upassword, :Unumber, :Utype)');
        $this->db->bind(':Fname',$data['Fname']);
        $this->db->bind(':Lname',$data['Lname']);
        $this->db->bind(':Bname',$data['Bname']);
        $this->db->bind(':Uemail',$data['Email']);
        $this->db->bind(':Upassword',$data['Password']);
        $this->db->bind(':Unumber',$data['Number']);
        $this->db->bind(':Utype','User');
       

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
            session_destroy();

            header('location:' . URLROOT . '/users/index');



        }

    public function ShowOrders(){
            $this->db->query("SELECT orders.Id, users.Brand_Name AS Ordered_By,orders.base_product,orders.Fabric,orders.Colour,printing.Type AS printing_Type ,orders.Quantity,orders.additionalInfo,orders.deliveryTime,orders.Order_date,orders.Order_status FROM orders INNER JOIN users ON Orders.Ordered_By=users.Id INNER JOIN printing ON orders.Printing=printing.Print_Id");
            $result = $this->db->resultSet();
            return $result;
        }
    public function ViewUsers()
    {
    

        $this->db->query("SELECT * FROM users");
        $result = $this->db->resultSet();
        return $result;
      
    }

    public function ViewAdmins()
    {
    

        $this->db->query("SELECT * FROM users WHERE User_Type = 'Admin'");
        $result = $this->db->resultSet();
        return $result;
      
    }
    public function UpdateOrder($id,$action){
        $this->db->query('UPDATE orders SET Order_status= :action WHERE Id = :id');
        $this->db->bind(':id',$id);
        $this->db->bind(':action',$action);
        if($this->db->execute())
        return true;
        else
        return false;

    }
    public function DeleteAdmin($id)
    {
    
      // require_once  APPROOT . '/views/includes/admin_panel_admins.php';
     
        $this->db->query('DELETE FROM users WHERE Id = :id');
        $this->db->bind(':id' , $id);
        if($this->db->execute())
        return true;
        else
        return false;
        
      
    }

    public function AddAdmin($data)
    {
    
      // require_once  APPROOT . '/views/includes/admin_panel_admins.php';
     
      $this->db->query('INSERT INTO users (First_Name, Last_Name, Brand_Name, User_Email, User_Password, User_Number, User_Type) 
      VALUES (:Fname, :Lname, :Bname, :Uemail, :Upassword, :Unumber, :Utype)');
      $this->db->bind(':Fname',$data['Fname']);
      $this->db->bind(':Lname',$data['Lname']);
      $this->db->bind(':Bname','');
      $this->db->bind(':Uemail',$data['Email']);
      $this->db->bind(':Upassword',$data['Password']);
      $this->db->bind(':Unumber','');
      $this->db->bind(':Utype','Admin');
     

      if ($this->db->execute()) {
          return true;
      } else {
          return false;
      }
        
      
    }




    public function findUserById($id) {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE Id = :id');

        //Email param will be binded with the email variable
        $this->db->bind(':id', $id);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    } 

     

    public function updateUser($data){

        $this->db->query('UPDATE users SET First_Name = :Fname , Last_Name = :Lname, Brand_Name = :Bname, User_Number = :usernum, User_Email = :Email  WHERE Id = :Id');
        $this->db->bind(':Fname' , $data['Fnamee']);
        $this->db->bind(':Lname' , $data['Lnamee']);
        $this->db->bind(':Bname' , $data['Bnamee']);
        $this->db->bind(':usernum' , $data['usernume']);
        $this->db->bind(':Email' , $data['Emaile']);
        $this->db->bind(':Id' , $data['Id']);

        $this->db->execute();
        
      
        

        
    }
    public function UpdatePasswordinDB($data)
    {
      $this->db->query('UPDATE users SET User_Password =:Pass  WHERE Id=:Id');
      $this->db->bind(":Pass",$data['Password']);
      $this->db->bind(":Id",$data['Id']);
      $this->db->execute();



    }
    

     


        public function findUserByEmail($email) {
            //Prepared statement
            $this->db->query('SELECT * FROM users WHERE User_Email = :email');
    
            //Email param will be binded with the email variable
            $this->db->bind(':email', $email);
           $this->db->single();
            //Check if email is already registered
            if($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }    

        public function delete($id)
        {
           
            $this->db->query('DELETE FROM users WHERE Id = :id');
            $this->db->bind('id',$id);
            $this->db->execute();
            


        }

    }
