<!DOCTYPE html>
<html>
<head>
       <!-- initialising the style sheet-->
	   <link rel="stylesheet" type="text/css" href="css/Main.css" media="all" />   
	   <link rel="stylesheet" type="text/css" href="css/Comments.css" media="all" />  
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
			<h1> Frequent Asked Questions</h1>
			<P> Here is a list of the most asked questions </p>
    <!--  Questions example -->  
<div class="tooltips-gray">This is the question<div></div></div>
<!-- end the q-->

<!-- Answer 1 -->
<div class="clean-gray"> This is the answer</div>
<!-- end answer 1-->      

         
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

