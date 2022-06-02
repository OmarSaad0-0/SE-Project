<?php
   require APPROOT . '/views/includes/admin_navigation.php';
?>

<html>
<form class="form-control" action = "" method ="POST">
  <div class="form">
<?php foreach($data as $product)
    {
         $name =$product->Name;
         $img = $product->Image;
         $type = $product->Type;

    }
    ?>
  <div class="col-md-5">
<label class="form-label" for="Product_Name">Product Name</label><br>
<input type ='text' id="Product_Name" name = 'Product_Name' placeholder = 'Product Name' class="form-control" value = "<?php echo $name;?>" required ></input><br>
  </div>
  <div class="col-md-5">
  <label class="form-label" for="Image">Product Image</label>
<input type ='file' name = "Image" id = "Image" class="form-control" value = <?php echo $img;?>></input><br>
  </div>
  <div class="col-md-5">
<label class="form-label" for="categories">Choose a category</label><br>
<select class="form-control" id="categories" name="categories" >
  <option value="Men" >Men</option>
  <option value="Women">Women</option>
  <option value="Unisex">Unisex</option>
</select><br>
</div>
<div class="col-md-5">

<input type = 'submit' name = 'save-edit'  value = 'Save' class="btn btn-dark"></input><br>
  </div>
  </div>
</form>

    </html>


    
    
