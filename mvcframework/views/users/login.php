<?php
   require APPROOT . '/views/includes/navigation.php';
?>
Mora@gmail.com

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="container-login">
    <div class="wrapper-login">
        <h2>Sign in out out out <h2>

        <form action="<?php echo URLROOT; ?>/users/login" method ="POST" class="login-form">
            <input type="text" placeholder="Email" name="email" class="box">
            <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </span>

            <input type="password" placeholder="Password" name="Pass" class="box">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <button id="submit" type="submit" value="Login! " name='Submit' class="btn"></button>

            <p>don't have an account <a href="<?php echo URLROOT; ?>/users/register">create now</a></p>
        </form>
    </div>
</div>


