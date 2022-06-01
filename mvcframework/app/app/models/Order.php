<?php
class Order
{
 private $db;

 public function __construct()
 {
     $this ->db=new Database;
 }

 public function InsOrder($data,$id)
 {
     $this->db->query('INSERT INTO orders (Ordered_By,Base_Product,Fabric,Colour, Printing, Quantity,additionalInfo,deliveryTime) VALUES (:ob,:bp, :fabric, :colour, :printing, :quantity, :info,:dtime)');
    $this->db->bind(':ob',$id);
     $this->db->bind(':bp',$data['Base']);
     $this->db->bind(':fabric',$data['Fabric']);
     $this->db->bind(':colour',$data['Colour']);
     $this->db->bind(':printing',$data['Printing']);
     $this->db->bind(':quantity',$data['Quantity']);
     $this->db->bind(':info',$data['Info']);
     $this->db->bind(':dtime',$data['Time']);

     $this->db->execute();
 } 

 public function SelectPrint()
 {
     $this->db->query("SELECT Type FROM printing");
    $row = $this->db->resultset();
    return $row; 
    
 } 


 
}