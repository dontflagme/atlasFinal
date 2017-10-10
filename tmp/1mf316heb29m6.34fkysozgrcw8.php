<html>
    <head>
        <title>View my Events</title>
        <link rel="icon" type="image/ico" href="img/exploreicon.png" />
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href= "css/style.css" rel="stylesheet" type="text/css">
        <link href= "css/homenav.css" rel="stylesheet" type="text/css">
        <link href= "css/options.css" rel="stylesheet" type="text/css">
		<link href= "css/addIdea.css" rel="stylesheet" type="text/css">
        <link href= "css/main.css" rel="stylesheet" type="text/css">
        <link href= "css/home.css" rel="stylesheet" type="text/css">
        
        

    </head>
    
    <body>
        
		<nav class="navbar navbar-inverse" id="navbar">
			<img src="img/exploreicon.png" height="60" width="60" id ="icon"/>
			<div class="container-fluid" id="navbar-container">
				
			  <ul class="nav navbar-nav" id="navbartext">
				<li><a href="./homelogin" id="navLink">Home</a></li>
				<li><h4>|</h4></li>
				<li><a href="./explorebackend" id="navLink">Explore</a></li>
				<li><h4>|</h4></li>
				<li ><a href=" ./logout" id="navLink">Log Out</a></li>
			  </ul>
			</div>
 
                    <!--Search Bar-->
                    <div class="col-md-4" id="search-container">
                            <form action="" class="search-form" id="searchbar">
                                <div class="form-group has-feedback">
                                    <label for="search" class="sr-only">Search</label>
                                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                            </form>
                    </div>
		</nav>
		
		<div class="wrapper">
            <section id="banner_section">
                <img src="http://www.twitrcovers.com/wp-content/uploads/2014/12/City-Bokeh-Lights-l.jpg" id="banner"/>
                <img src="img/<?= ($profilePicture) ?>" id="profile_picture">
                <h3 id="name_banner"><?= ($firstName) ?> <?= ($lastName) ?></h3>
            </section>
		</div>
		
		<p><br></p>
		
		 <div class="row">
			
			<div class="col-md-2">

            </div>

            <div class="container_fluid rounded col-md-8">
				<p><br></p>
				<center><h1>Add an Idea: </h1></center>
				<p><br></p>
                    
				<form action="./addidea" method="post" enctype="multipart/form-data">
					<div class="row form-group">
						<div class="col-md-3">
							<legend>Enter in a title</legend>
							<input type="text" name="eventTitle" id="eventTitle" class="form-control" placeholder="Enter in a title...">
						</div>
						
						<div class="col-md-3">
							<legend>Add details</legend>
							<textarea rows="1" cols="50" name="eventDetails" id="eventDetails" class="form-control" placeholder="Enter details..." ></textarea>
						</div>
						
						<div class="col-md-3">
							<legend for="rating">Rating:</legend>
							<select class="form-control" id="rating" name="rating">
							  <option>None</option>
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							</select>
						</div>
							
						<div class="col-md-3">
							<legend>Add a photo(*)</legend>
							<input type="file" name="eventPicture" id="eventPicture" class="form-control">
						</div>
						
					</div>
					<div class="col-md-12">
						<p><br></p>
					</div>
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<button type="submit" name="submit" class="btn btn-info form-control">Add that Idea!</button>
					</div>
					<div class="col-md-4">
					</div>
					<div class="col-md-12">
						<p><br></p>
					</div>
					
				</form>
			
			</div><!--End 8 col-->
			<div class="col-md-2">
				
            </div>
		 </div>
		 
			

			<div class="row">
				<div class="col-md-2">
				</div>
					<div class="col-md-8">
						<?php foreach (($events?:[]) as $event): ?>
							
							<div class="container col-md-3">
									<a href="#signup" role="button" data-toggle="modal" data-target=".viewEvent<?= ($event['event_id']) ?>" >
										<img src="img/<?= ($event['image']) ?>" height="400" width="400" id="addIdeaImage">
									</a>
									
									<!-- view event modal -->
									<div class="modal fade viewEvent<?= ($event['event_id']) ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									  <div class="modal-dialog modal-lg">
										<div class="modal-content" id="modalcontent">
										 
			
								<a href="#signup" role="button" data-toggle="modal" data-target=".viewEvent">
			
								 <img src="img/<?= ($event['image']) ?>" id="addIdeaImage"></a>
							   
								<h2><?= ($event['title']) ?></h2>
									
								<p><?= ($event['event_details']) ?></p>
					
											
										</div>
					
									  </div>
									</div>
		
							</div>
		
						<?php endforeach; ?>
					</div>
				<div class="col-md-2">
				</div>
            </div>
            
            	<!--<div class="container_fluid col-md-3" id="sidenav">
        
        
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
		  </div>-->
			
		
		  </div><!--End of row-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  
    </body>
</html>