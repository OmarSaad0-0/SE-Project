<html>
<nav>
<br>
<?php

echo "Hello, " .$_SESSION['First_Name'];

?>

<?php if(isset($_SESSION['Id'])) :?>
        <a href="<?php echo URLROOT; ?>/users/logout">Logout</a>
        
        <?php endif; ?>

<br><br><a href="<?php echo URLROOT ?>/users/admin_panel_admins">Admins</a>
<a href="<?php echo URLROOT ?>/users/admin_panel_users">Users</a>
<a href="<?php echo URLROOT ?>/users/Admin_OrdersAction">Orders</a>
<a href="#">Products</a>
</nav>
<br>
</html>