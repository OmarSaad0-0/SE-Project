<html>
<nav>
<br>
<?php

echo "Hello, " .$_SESSION['First_Name'];

?>

<?php if(isset($_SESSION['Id'])) :?>
        <a href="<?php echo URLROOT; ?>/users/logout">Logout</a>
        
        <?php endif; ?>

<br><br><a href="http://localhost/mvcframework/users/admin_panel_admins">Admins</a>
<a href="http://localhost/mvcframework/users/admin_panel_users">Users</a>
<a href="#">Orders</a>
<a href="#">Products</a>
</nav>
<br>
</html>