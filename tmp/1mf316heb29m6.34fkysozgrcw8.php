<html>
    <head>
        <title>View my Events</title>
        <link rel="icon" type="image/ico" href="img/exploreicon.png" />
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href= "css/style.css" rel="stylesheet" type="text/css">
         <link href= "css/homenav.css" rel="stylesheet" type="text/css">
        <link href= "css/options.css" rel="stylesheet" type="text/css">
        <!--<link href= "css/main.css" rel="stylesheet" type="text/css">
        <link href= "css/home.css" rel="stylesheet" type="text/css">-->
        
        

    </head>
    
    <body>
        
		<nav class="navbar navbar-inverse" id="navbar">
			
			<div class="container-fluid">
				<img src="img/exploreicon.png" height="60" width="60" id ="icon"/>
			  <ul class="nav navbar-nav" id="navbartext">
				<li><a href="./homelogin" id="navLink">Home</a></li>
				<li><h4>|</h4></li>
				<li><a href="./explorebackend" id="navLink">Explore</a></li>
				<li><h4>|</h4></li>
				<li ><a href=" ./logout" id="navLink">Log Out</a></li>
			  </ul>
			</div>
 
                    <!--Search Bar-->
                    <div class="col-md-12">
                            <form action="" class="search-form" id="searchbar">
                                <div class="form-group has-feedback">
                                    <label for="search" class="sr-only">Search</label>
                                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                            </form>
                    </div>
		</nav>  
        
		 <div class="row">
            
            <div class="col-md-8" id="contentSection">			
					<center><h1>Add an Idea: </h1></center>
                    
            <form action="./addidea" method="post" enctype="multipart/form-data">
                <div class="col-md-4" id="contentSection">
                    <legend>Enter in a title</legend><input type="text" name="eventTitle" id="eventTitle" placeholder="Enter in a title...">
                </div>
                
                <div class="col-md-4" id="contentSection">
                    <legend>Add details</legend><textarea rows="4" cols="50" name="eventDetails" id="eventDetails"></textarea>
                </div>
                    
                <div class="col-md-4" id="contentSection">
					<legend>Add a photo(*)</legend><input type="file" name="eventPicture" id="eventPicture">
				</div>
				
				<div class="col-md-4" id="contentSection">
					<button type="submit" name="submit">Add that Idea!</button>
				</div>
				
            </form>
			
			
			</div><!--End 8 col-->
            

				<?php foreach (($events?:[]) as $event): ?>
                    <div class="grid">
                        <a href="#signup" role="button" data-toggle="modal" data-target=".viewEvent<?= ($event['event_id']) ?>" >
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Seattlenighttimequeenanne.jpg/449px-Seattlenighttimequeenanne.jpg" />
                        </a>
                        
                        <!-- view event modal -->
                        <div class="modal fade viewEvent<?= ($event['event_id']) ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent">
                             

                    <a href="#signup" role="button" data-toggle="modal" data-target=".viewEvent">

                     <img src="http://www.twitrcovers.com/wp-content/uploads/2014/12/City-Bokeh-Lights-l.jpg" /></a>
                   
                    <h2><?= ($event['title']) ?></h2>
                        
                    <p><?= ($event['event_details']) ?></p>
        
                                
                            </div>
        
                          </div>
                        </div>
                        
                        <h2><?= ($event['title']) ?></h2>
                        
                        <p><?= ($event['event_details']) ?></p>
                </div>

    
                    
                <?php endforeach; ?>
            
            
            	<div class="container_fluid col-md-3" id="sidenav">
        
        
				<table class="table table-hover" id="side_nav">
                    <tr>
                        <th><a href="explore.php"><h1>Events Joined</h1></a></th>
                    </tr>       
                     <tr>
                        <td>Group Paintball</td>
                    </tr>    
                    <tr>
                        <td>Explore the Ape caves</td>
                    </tr>
                    <tr>
                        <td>Escape Room!</td>
                    </tr>                            
                </table>

                <table class="table table-hover" id="table_home">
                    <tr>
                        <th><a href="#"><h1>Options</h1></a></th>
                    </tr>       
                    <tr>
                        <td><a href="./addidea" id="sideNavLink">Add idea</a></td>
                    </tr>    
                    <tr>
                        <td><a href="./viewevents" id="sideNavLink">Edit my atlas</a></td>
                    </tr>                          
                 </table>
            </div>
		  </div>
			
		
		  </div><!--End of row-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  
    </body>
</html>