<?php session_start();
if(!$_SESSION['login'])
header("location:index.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Online Ticket Reserving System</title>
<link rel="stylesheet" type="text/css" href="css/style_admin.css" />
<link rel="stylesheet" href="css/style_form.css" type="text/css" media="all" />
</head>
<body>

<div id="main_container">
	<div id="header">
    	<div class="logo"><img src="images/logos.png" style="width:229px;height:94px;" border="0" alt="" title="" /></div>       
    </div>
        <div class="menu" style="float:right">
        	<ul>                                                                         
        		                                                                    
        		<li><a href="home.php">Home</a></li>
                <li><a href="add_theatres.php">Add Theatre</a></li>
                <li class="selected"><a href="delete_theatre.php">Delete Theatre</a></li>
                <li><a href="logout.php">Logout</a></li>
        	
        	</ul>
        </div>
        
    <div class="content_form">
	
	     <div class="title_welcome">
			     Online Movie Ticket Booking Control Panel
		 </div> <br/><br/>
    
	     <span style="color:rgb(185, 34, 34);font-size:21px;margin-left:40px;">Search for Theatre</span><br/>
     	
	       	
		    <form class="form" method="post" name="search" id="search" action="process_delete_theatre.php" enctype="multipart/form-data"> 
		
              <p class="name">  
								<label for="name">Theatre Name</label> &nbsp;&nbsp;
								<input type="text" name="theatre_name" id="theatre_name">  
										  
							</p> <br/> 
							
							
							<p class="name" style="margin-left:40px;">  
								
								<label for="name">District</label> &nbsp;&nbsp;
                                <select id="theatre_district" name="theatre_district" required>
									
									<option value="" selected="selected">--Select--</option>
									<option value="Alappuzha">Alappuzha</option>
									<option value="Eranakulam ">Eranakulam </option>
									<option value="Idukki">Idukki</option>
									<option value="Kannur">Kannur</option>
									<option value="Kasaragod ">Kasaragod </option>
									<option value="Kollam">Kollam</option>
									<option value="Kottayam">Kottayam</option>
									<option value="Kozhikode">Kozhikode</option>
									<option value="Malappuram">Malappuram</option>
									<option value="Palakkad">Palakkad</option>
									<option value="Pathanamthitta">Pathanamthitta</option>
									<option value="Thiruvananthapuram ">Thiruvananthapuram </option>
									<option value="Thrissur">Thrissur</option>
									<option value="Wayanad">Wayanad</option>
								
								</select>  								
										  
							</p> <br/> <br/>
       
                            <p class="submit">  
								<input type="submit" value="Search" id="submit" name="submit" style="margin-left:525px;" />  
							</p>  
								  
			</form> 
        
       
        
        <div class="clear"></div> 
    
    </div>                                
         

    
    <div id="footer">                                              
        <div class="left_footer">
		   
		    <a href="home.php">Home</a> 
       
    </div>
    
    
    
</div>
<!-- end of main_container -->

</body>
</html>