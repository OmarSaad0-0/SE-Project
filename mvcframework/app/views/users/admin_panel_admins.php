<?php
   require APPROOT . '/views/includes/admin_navigation.php';
?>

<form action = "<?php echo URLROOT; ?>/users/admin_panel_add_admins" >
<div class="btn">
<a class="btn btn-dark" href = "http://localhost/mvcframework/users/admin_panel_add_adminform" >Add Admin</a>
</div>
</form>
<?php

 echo "<table  class='table table-striped table-hover table-bordered' >
 <th >id</th>
 <th>First Name</th>
 <th>Last Name</th>
 <th>Email</th>
 <th>User Role</th>
 <th>Delete Account</th>";

 
foreach($data as $user)
{
    // Don't show the delete button for the current logged in admin
    if($user->Id == $_SESSION['Id'])
    {echo "<tr ><td>".$user->Id."</td><td>".$user->First_Name."</td><td>".$user->Last_Name."</td><td>".$user->User_Email."</td><td>".$user->User_Type."</td></tr>" ;}
    
    
    
else{

    // Else, show buttons for all other admins
    echo "<tr ><td>".$user->Id."</td><td>".$user->First_Name."</td><td>".$user->Last_Name."</td><td>".$user->User_Email."</td><td>".$user->User_Type."</td>
    <td><form action ='http://localhost/mvcframework/users/admin_panel_delete_admins?action=remove&id=$user->Id' method = 'POST'>
    <input type = 'submit' name = 'del-button' value ='Delete'  ></input></td></tr>
    </form>" ;

}
    
  

}
echo"</table>";


?>