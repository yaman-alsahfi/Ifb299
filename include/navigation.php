<html>

            
	<nav id="navigation" class="clearfix">
        
            <div class="menuitem"><a href="index.php">Home</a></div>    
            <div class="menuitem"><a href="reg.php">Register</a></div>

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
            <div class="menuitem"><a href="***.php">Forum</a></div>            
            <div class="menuitem"><a href="Tutorials.php">Tutorials</a></div>
            <div class="menuitem"><a href="FAQ.php">FAQ</a></div>
         
    </nav>
</html>