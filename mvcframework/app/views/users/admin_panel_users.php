<?php
   require APPROOT . '/views/includes/admin_navigation.php';
?>



 <table class="table table-striped table-hover">
 <th >id</th>
 <th>First Name</th>
 <th>Last Name</th>
 <th>Email</th>
 <th>Number</th>
 
 <?php
foreach($data as $user){
    if($user->User_Type == 'User'){
    echo "<tr ><td>".$user->Id."</td><td>".$user->First_Name."</td><td>".$user->Last_Name."</td><td>".$user->Brand_Name."</td><td>".$user->User_Number."</td></tr>";
    }

}
echo"</table>";

   


