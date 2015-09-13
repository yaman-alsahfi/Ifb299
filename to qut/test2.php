<!DOCTYPE html>
<html>
<head>
		    <!-- Metadata -->
<link rel="stylesheet" type="text/css" href="test.css" media="all" />
</head>
<body>
<div class="gridcontainer">
    <div class="gridwrapper">
        <div class="gridbox gridheader">
            <div class="header">
		    <!-- Header -->
			<?php include("Header2.html");?>
            </div>
        </div>
        <div class="gridbox gridmenu">
		    <!-- Header -->            
			<?php include("Navigstion.php");?>
        </div>
        <div class="gridbox gridmain">
            <div class="main">
<h1>The Main</h1>
 <p>  Here the upload and stuff </p>   
             <form method="post" action="admin.php" enctype="multipart/form-data">
                <div class="field">
                    <label for="usern">File:</label>
                    <input type="file" name="uploadfile" id="file"/>
                    <input class="button" type='submit' value='Upload' />    
                </div>                                                        
            </form>
               </div>
        </div>
        <div class="gridbox gridright">
            <div class="right">
<h2>the map</h2>
<p>The Pulpit Rock is a part of a mountain that looks like a pulpit.</p>
<h2>Where?</h2>
<p>The Pulpit Rock is in Norway</p>
<h2>Price?</h2>
<p>The walk is free!</p>
            </div>
        </div>
        <div class="gridbox gridfooter">
            <div class="footer">
            <!-- footer -->
			<?php include("footer.html");?>
            </div>
        </div>
    </div>
</div>
</body>
</html>

