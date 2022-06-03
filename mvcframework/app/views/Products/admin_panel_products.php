<?php
   require APPROOT . '/views/includes/admin_navigation.php';
?>
<div class="btn">
<a class="btn btn-dark" href = "<?php echo URLROOT ?>/products/admin_panel_products_addform" > Add Product!</a>
</div>
<br>
<table class="table table-striped table-hover">
 <th> Product Name</th>
 <th> Category </th>
 <th> Image </th>
 <th> Actions </th>

<?php foreach($data as $product){

echo "<tr><td>".$product->Name."</td><td>".$product->Type."</td><td>".$product->Image."<form action ='http://localhost/mvcframework/products/admin_panel_products_delete?action=remove&id=$product->ID' method = 'POST'>
   
   <td><a  href = 'http://localhost/mvcframework/products/admin_panel_products_edit?id=$product->ID' class='btn btn-primary'>Edit</a> <input type = 'submit' name = 'del-button' class='btn btn-dark' value ='Delete'></input></td>
   </form>
   </td></tr>
   ";

   

 }
 ?>