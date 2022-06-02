<a href = "<?php echo URLROOT ?>/products/admin_panel_products_addform" > Add Product!</a>

<table border = 5>
 <th> Product Name</th>
 <th> Category </th>
 <th> Image </th>
 <th> Actions </th>

<?php foreach($data as $product){

echo "<tr><td>".$product->Name."</td><td>".$product->Type."</td><td>".$product->Image."<form action ='http://localhost/mvcframework/products/admin_panel_products_delete?action=remove&id=$product->ID' method = 'POST'>
   
   <td><a href = 'http://localhost/mvcframework/products/admin_panel_products_edit?id=$product->ID'>Edit</a> <input type = 'submit' name = 'del-button' value ='Delete'></input></td>
   </form>
   </td></tr>
   ";

   

 }
 ?>