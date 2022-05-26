
<form method='POST' action="<?php echo URLROOT; ?>/orders/Enter?action=remove">
<input type='text' name='Fabric'>
<input type='text' name='Base'>
<input type='text' name='Colour'>
<select name="Printing">




<?php for ($x = 0; $x < count($data["PrintingTYpes"]); $x++)
{

?>
 
    <option selected="selected"><?php print_r($data['PrintingTYpes'][$x])?></option>


 
<?php
}
?>
 </select>
<input type='text' name='Quantity'>
<input type='text' name='Info'>
<input type='text' name='Time'>


<input type='submit'>
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

