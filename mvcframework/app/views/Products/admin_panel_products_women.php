WOMEN
<?php
   require APPROOT . '/views/includes/admin_navigation.php';
?>
<a href = "http://localhost/mvcframework/products/admin_panel_products_unisex ">Unisex</a>  
<a href = "http://localhost/mvcframework/products/admin_panel_products_men">Men</a>
<a href = "http://localhost/mvcframework/products/admin_panel_products_women">Women</a>


<a href = "http://localhost/mvcframework/products/admin_panel_products_women_addform"> Add Women Product</a>



<table border = 5>
 <th >Product Name</th>
 <th> Action 1 </th>
 <th> Action 2 </th>
 



 <?php foreach($data as $product){

echo "<tr><td>".$product->Product_Name."</td><td><form action ='http://localhost/mvcframework/products/admin_panel_products_unisex_delete?action=remove&id=$product->Id' method = 'POST'>
   <input type = 'submit' name = 'del-button' value ='Delete'></input>
   <td><a href = 'http://localhost/mvcframework/products/admin_panel_products_unisex_edit?id=$product->Id'>Edit</a></td>
   </form>
   </td></tr>
   ";

   

 }
 ?>