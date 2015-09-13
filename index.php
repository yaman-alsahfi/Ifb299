

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
			<h1>*</h1>
    <!--  a temporarily search box -->  
<form action="action_page.php">
  <input type="search" name="googlesearch">
  <input class="button" type= 'submit' value='Search' />    
</form>
                
            </div>
        </div>
        <div class="gridbox gridright">
            <div class="right">
<h2> </h2>
<p>Selection of new books this month</p>
<img src="http://s3.postimg.org/lhpvb23rn/books.jpg" alt="shelf" >

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

