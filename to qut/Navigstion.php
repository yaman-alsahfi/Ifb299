<html>

            
	<nav id="navigation" class="clearfix">
        
            <div class="menuitem"><a href="index.php">Home</a></div>    
            <div class="menuitem"><a href="register.php">Register</a></div>
            <div class="menuitem"><a href="admin.php">Admin</a></div>
            <?php
            if(@$_SESSION['first_name']){
            ?>
            <div class="menuitem"><a href="logout.php">Logout</a></div>
            <?php
            }else{
            ?>
            <div class="menuitem"><a href="login.php">Login</a></div>
            <?php
            }
            ?>
         
    </nav>
</html>