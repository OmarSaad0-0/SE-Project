<?php
   require APPROOT . '/views/includes/admin_navigation.php';
?>
<html>

ADD ADMIN FORM


<form action = "http://localhost/mvcframework/users/admin_panel_add_adminform" method = "POST">
  <label for="Fname">First name:</label><br>
  <input type="text" id="Fname" name="Fname"><br>


  <label for="Lname">Last name:</label><br>
  <input type="text" id="Lname" name="Lname"><br>

  <label for="Email">Email:</label><br>
  <input type="email" id="Email" name="Email"><br>

  <label for="password">Password:</label><br>
  <input type="password" id="Lname" name="Password"><br>

  
  <input type="submit" id="submit-button" name="submit-button" value ="Add!"><br>

</form>


    </html>