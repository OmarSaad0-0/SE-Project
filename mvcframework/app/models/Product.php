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