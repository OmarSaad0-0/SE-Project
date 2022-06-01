
<form method='POST' action="<?php echo URLROOT; ?>/orders/Enter">
Fabric<input type='text' name='Fabric'>
Base<input type='text' name='Base'>
Colour<input type='text' name='Colour'>
Quantity<input type='text' name='Quantity'>
Info<input type='text' name='Info'>
Time<input type='text' name='Time'>
<input type='submit'>

<?php
echo "<select>";
foreach ($data as $a)
{
    
    
        echo "<option selected='selected' value= '$a->Type'> $a->Type</option>";
    
    echo "<br>";
}
   echo "</select>" ;
?>


</form>




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

