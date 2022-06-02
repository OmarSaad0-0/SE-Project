
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/ord.css">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <title>Drag and drop upload</title>
  </head>
  <body>

  <br>
  <br>
  <?php
 $temp= $data['name'];
 ?>
  <form action="http://localhost/mvcframework/orders/Enter?name=<?php echo $temp?>" method='POST'>
  <!--- section fabric starts -->
    <div class="drop-container">
      <div class="drop">
        <span class="step1">
          STEP 1 : FABRIC
        </span>  
        <input type="text" class = "t" name='Fabric'>
      </div>
      <div class="progress"></div>
    </div>

<!--- section fabric ends -->
<br>
<br>

<!--- section uploud color starts -->

    <div class="drop-container">
      <div class="drop">
      <span class="step2">
          STEP 2 : UPLOUD COLOR
        </span> 
        <i class="fa-solid fa-photo-film icon"></i>
       <br>
       
        <label for="file-upload">Browse Files</label>
        <input type="file" id="file-upload" class="file-input" name='Colour' />
      </div>
      <div class="progress"></div>
    </div>

    <!--- section uploud color ends -->
<br>
<br>

<!-- sectiion type of printing starts -->

<div class="drop-container">
      <div class="drop">
      <span class="step2">
        <b><b><i> STEP 4 : TYPE OF PRINTING </i></b></b>
        <br>
        </span> 
        <?php
       foreach($data['Pr'] as $type)
       {
  
         ?>
        <label1>
            <input type="checkbox" value='<?php echo $type->Type;?>' class = "checkp" name='Printing'> 
              <?php echo $type->Type;?> 
        </label1>
  
        <?php
       }
       ?>
      </div>
      <div class="progress"></div>
</div>
<!-- sectiion type of printing ends -->

<!-- sectiion Quantity starts -->

<div class="drop-container">
      <div class="drop">
        <span class="step3">
          STEP 5 : QUANTITY
        </span>  
       
<select name = "Quantity" class = "Quantity" >
<option value = "60" selected >60</option>
<option value = "120">120</option>
<option value = "180">180</option>
<option value = "240" >240</option>
<option value = "300">300</option>
<option value = "360">360</option>
<option value = "420">420</option>
</select>

      </div>
      <div class="progress"></div>
    </div>

    <!-- sectiion Quantity ends -->

<!-- sectiion things starts -->

    <div class="drop-container">
      <div class="drop">
        <span class="step1">
          STEP 6 : ANYTHING THAT WE SHOULD KNOW ?
        </span>  
        <input type="text" class = "t" name='Info'>
      </div>
      <div class="progress"></div>
    </div>
<!-- sectiion Quantity ends -->

<!-- sectiion Time starts -->


    <div class="drop-container">
      <div class="drop">
      <span class="step2">
          STEP 7 : Deleivery Time
        </span> 
        <label1>
            <input type="checkbox" value='Asap' class = "checkpp" name='Time'> 
          ASAP
        </label1>
  
        <label1>
            <input type="checkbox" value='Flexable' class = "checkpp"> 
          FLEXABLE
        </label1>

      </div>
      <div class="progress"></div>
</div>
<!-- sectiion Time ends -->

        <input type= "submit" class = "submit" >Submit</input>
<?php

       $Name=$_GET['name']; 
       ?>
        <input type='hidden' name='Base' value='<?php echo $Name;?>'>
        <input type='hidden' name='status' value="Pending"> 
<br>
<br>


<script>

var checks = document.querySelectorAll(".checkp");
var max3 = 1;
for (var i = 0; i < checks.length; i++)
  checks[i].onclick = selectiveCheck;
  function selectiveCheck (event) {
 var checkedChecks = document.querySelectorAll(".checkp:checked");
 if (checkedChecks.length >= max3 + 1)
   return false;
}
var checks = document.querySelectorAll(".checkpp");
var max = 1;
for (var i = 0; i < checks.length; i++)
  checks[i].onclick = selectiveCheck;
  function selectiveCheck (event) {
 var checkedChecks = document.querySelectorAll(".checkpp:checked");
 if (checkedChecks.length >= max + 1)
   return false;
}
    </script>


<!--- section type of printing ends--->
    <script src="main.js"></script>

  </body>
</html>
</form>
<?php
/*
var_dump($data['Printing']);
?>
<?php
echo "<select name= 'Printing'>";
foreach ($data['Pr'] as $a)

    
    
        echo "<option selected='selected' value= '$a->Type'> $a->Type</option>";
    
    echo "<br>";
}
   echo "</select>" ;
?>







<?php
    $_SESSION['Base']=$_POST['Base'];
    $_SESSION['Fabric']=$_POST['Fabric'];
    $_SESSION['Colour']=$_POST['Colour'];
    $_SESSION['Printing']=$_POST['Printing'];
    $_SESSION['Printing']=$_POST['Quantity'];
    $_SESSION['Quantity']=$_POST['Quantity'];
    $_SESSION['Info']=$_POST['Info'];
    $_SESSION['Time']=$_POST['Time'];
    $_SESSION['Pr']=$data['Pr'];

*/


