<?php
   require APPROOT . '/views/includes/admin_navigation.php';
?>


<form class="form-control" action = "http://localhost/mvcframework/products/admin_panel_products_add" method = "POST">
    <div class="form">
    <div class="col-md-5">
    <label class="form-label" for="name">Name</label><br><input class="form-control" type = "text" name = "name" required></input><br>
</div>
<div class="col-md-5">
<label class="form-label" for="categories">Categories</label><br> 
<select class="form-control" id ='categories' name = 'categories' required><br>

    <br><option class="form-control" value = 'Men'>Men</option><br>
    <br><option class="form-control" value = 'Women'>Women</option><br>
    <br><option class="form-control" value = 'Unisex'>Unisex</option><br>
</select>
</div>
<div class="col-md-5"> 
<br><label class="form-label" for='Image'>Product Image</label>
<input class="form-control" type = "file" name = 'Image' id = 'Image' ></input>
</div>
<div class="col-md-5">
<br><br>  <input class=" btn btn-dark" type ="submit" value = "Add" ></input><br>
</div>
</div>

</form>