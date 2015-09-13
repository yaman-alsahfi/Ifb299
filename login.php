<!DOCTYPE html>
<html>
<head>
       <!-- initialising the style sheet-->
	   <link rel="stylesheet" type="text/css" href="css/Main.css" media="all" />   
</head>
<body>
<div class="gridcontainer">
    <div class="gridwrapper">
        <div class="gridbox gridheader">
            <div class="header">
		    <!-- Header -->
			<?php include("Include/Header.html");?>
            </div>
        </div>
        <div class="gridbox gridmenu">
		    <!-- Navigation menu -->            
			<?php include("Include/navigation.php");?> 
        </div>
        <div class="gridbox gridmain">
            <div class="main">
	<h2> Welcome back!</h2>
    <form action="pro.php" method="post">
        <fieldset>
        <legend> Registered Users</legend>
		User name: <input type="text" name="username"/> <br/>
		Password: <input type="password" name="password"/> <br/>	
		<input type="submit" name="login" value="Login"/>
		</fieldset>
    </form>
	<p> Not registered yet? <a href="reg.php">Click here</a> </p>
                
            </div>
        </div>
 
 
        <div class="gridbox gridfooter">
            <div class="footer">
            <!-- footer -->
			<?php include("Include/footer.html");?>
            </div>
        </div>
    </div>
</div>
</body>
</html>

