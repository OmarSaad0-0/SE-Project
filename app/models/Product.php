<?php
class Product
{
 private $db;

 public function __construct()
 {
     $this ->db=new Database;
 }


 public function ViewUnisex()
    {
    

        $this->db->query("SELECT * FROM unisex_product");
        $result = $this->db->resultSet();
        return $result;
      
    }

    public function AddUnisex($data)
    {
    
      // require_once  APPROOT . '/views/includes/admin_panel_admins.php';
     
      $this->db->query('INSERT INTO unisex_product (Product_Name) 
      VALUES (:Pname)');
      $this->db->bind(':Pname',$data['Name']);
      
     

      if ($this->db->execute()) {
          return true;
      } else {
          return false;
      }
        
      
    }

    public function ViewMen()
    {
    

        $this->db->query("SELECT * FROM men_products");
        $result = $this->db->resultSet();
        return $result;
      
    }

    public function ViewWomen()
    {
    

        $this->db->query("SELECT * FROM woman_product");
        $result = $this->db->resultSet();
        return $result;
      
    }

    public function updateMen($data){

        $this->db->query('UPDATE men_products SET Product_Name = :Pname  WHERE Id = :Id');
        $this->db->bind(':Pname' , $data['productName']);
        $this->db->bind(':Id' , $data['Id']);
        

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        
      
        

        
    }

    public function updateWomen($data){

        $this->db->query('UPDATE woman_product SET Product_Name = :Pname  WHERE Id = :Id');
        $this->db->bind(':Pname' , $data['productName']);
        $this->db->bind(':Id' , $data['Id']);
        

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        
      
        

        
    }

    public function deleteMen($id)
        {
           
            $this->db->query('DELETE FROM men_products WHERE Id = :id');
            $this->db->bind(':id',$id);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
            


        }

        public function deleteWomen($id)
        {
           
            $this->db->query('DELETE FROM woman_product WHERE Id = :id');
            $this->db->bind(':id',$id);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
            


        }


    public function AddMen($data)
    {
    
      // require_once  APPROOT . '/views/includes/admin_panel_admins.php';
     
      $this->db->query('INSERT INTO men_products (Product_Name) 
      VALUES (:Pname)');
      $this->db->bind(':Pname',$data['Name']);
      
     

      if ($this->db->execute()) {
          return true;
      } else {
          return false;
      }
        
      
    }

    public function AddWomen($data)
    {
    
      // require_once  APPROOT . '/views/includes/admin_panel_admins.php';
     
      $this->db->query('INSERT INTO woman_product (Product_Name) 
      VALUES (:Pname)');
      $this->db->bind(':Pname',$data['Name']);
      
     

      if ($this->db->execute()) {
          return true;
      } else {
          return false;
      }
        
      
    }



    public function updateUnisex($data){

        $this->db->query('UPDATE unisex_product SET Product_Name = :Pname  WHERE Id = :Id');
        $this->db->bind(':Pname' , $data['productName']);
        $this->db->bind(':Id' , $data['Id']);
        

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        
      
        

        
    }
    public function deleteUnisex($id)
        {
           
            $this->db->query('DELETE FROM unisex_product WHERE Id = :id');
            $this->db->bind(':id',$id);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
            


        }
    
    public function getProduct($id)
    {
        $this->db->query("SELECT Product_Name FROM unisex_product WHERE Id = :id");
        $this->db->bind(':id' , $id);
        $result = $this->db->resultSet();
        
        return $result;
    }


 
}