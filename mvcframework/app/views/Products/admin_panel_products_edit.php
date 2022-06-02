<html>
<form action = "" method ="POST">
<?php foreach($data as $product)
    {
         $name =$product->Name;
         $img = $product->Image;
         $type = $product->Type;

    }
    ?>
Product Name <input type ='text' name = 'Product_Name' placeholder = 'Product Name' value = "<?php echo $name;?>" required ></input>

<input type = 'submit' name = 'save-edit' value = 'Save'></input>
<input type ='file' name = "Image" id = "Image" value = <?php echo $img;?>></input>








<label for="categories">Choose a category:</label>
<select id="categories" name="categories" >
  <option value="Men" >Men</option>
  <option value="Women">Women</option>
  <option value="Unisex">Unisex</option>

</select>


</form>
    </html>


    
    
