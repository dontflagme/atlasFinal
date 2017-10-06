<html>
    <head>
        <title>Home</title>
        <link rel="icon" type="image/ico" href="img/exploreicon.png" />
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href= "css/navfooter.css" rel="stylesheet" type="text/css">
        <link href= "css/main.css" rel="stylesheet" type="text/css">
        <link href= "css/home.css" rel="stylesheet" type="text/css">
        <link href= "css/style.css" rel="stylesheet" type="text/css">
        <link href= "css/homenav.css" rel="stylesheet" type="text/css">

		<link href= "css/commentLayout.css" rel="stylesheet" />
		
		<script type="text/javascript" src="/js/jquery.js"></script>
		<script type="text/javascript" src="/js/script.js"></script>
    </head>
    
    <body>

        
        <header>
            
  
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
                                    <input type="text" class="form-control" name="search" id="search" placeholder="Look for other people">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                            </form>
		</nav>  

 	<div class="container_fluid col-md-3" id="sidenav">
        
        
				<table class="table table-hover" id="side_nav">
                    <tr>
                        <th><a href="explore.php"><h1>Events Joined </h1></a></th>
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
                        <td><a href="./addidea/<?= ($id) ?>" id="sideNavLink">Add idea</a></td>
                    </tr>    
                    <tr>
                        <td><a href="./viewevents" id="sideNavLink">Edit my atlas</a></td>
                    </tr>
                           
                 </table>
            </div>
		  </div>
                
                
           
        </header>

        <div id="wrapper">
			

		
			<!---------------This is the banner------------------------>
            <section id="banner_section">
                <img src="http://www.twitrcovers.com/wp-content/uploads/2014/12/City-Bokeh-Lights-l.jpg" id="banner"/>
                <img src="img/<?= ($profilePicture) ?>" id="profile_picture">
                <h3 id="name_banner"><?= ($firstName) ?> <?= ($lastName) ?></h3>
            </section>
	

			<!---------------------This is where the content repeats------------------------>
<?php foreach (($events?:[]) as $event): ?>
					<div class="grid">
						<img src="img/<?= ($event['postersProfilePicture']) ?>" id="poster"><br>
						<section id="poster_section">
							<img src="hardCodeImages/fourstar.png" id="rating_modal"/>
							<h4 class="poster-username"><?= ($event['firstname']) ?> <?= ($event['lastname']) ?></h4><br>
							<h5>Posted: <?= ($event['date']) ?> Time: <?= ($event['time']) ?></h5><br>
							<h4 id="title"><?= ($event['title']) ?>: <?= ($event['event_details']) ?></h4>
							
							<a href="#signup" role="button" data-toggle="modal" data-target=".details<?= ($event['event_id']) ?>" >
								<img src="img/<?= ($event['image']) ?>" />
							</a>	
								
								<!------------------This is where the comment section is------------------>
								<div class="commentWrapperContent">
									<div class="page-data">
										<h1>Add | Join | chocola</h1>
									</div>
									
	
									<div class="comment-insert">
										<div class="comment-insert-container">

											<textarea class="comment-insert-text" rows="1" cols="95" placeholder="Write something..."></textarea>
			
										</div>
									</div>
									<div class="comment-wrapper">
										<h3 class="comment-title">Add Comments:</h4><br>
									</div>
									
									<div class="comments-list">
										<ul class="comments-holder-ul" id="comments-holder-ul">
											<li class="comments-holder" id="_l">
												
											<div class="user-image">
													<img src="img/<?= ($event['postersProfilePicture']) ?>" id="poster">
												</div>
	
											<div class="comment-body">
												
												<h5 class="username-field">Kevin Nguyen</h5><br>
												<div class="comment-text">								
													<p class="commenting-field">The comments of the person will go here.The comments of the person will go here.The comments of the person will go here.The comments oThe comments of the person will go here.The comments of the person will go here.The comments of the person will go here.The comments of the person will go here.The comments of the person will go here.f the person will go here.The comments of the person will go here.The comments of the person will go here.The comments of the person will go here.The comments of the person will go here.The comments of the person will go here. </p>
												</div>										
											</div>
											
											<!--Delete Button for post -->
											<div class="comment-buttons-holder">
												<ul>
													<li class="delete-btn">x</li>
												</ul>
											</div>
											
											</li>
	
											<li class="comments-holder" id="_l">
											
												<div class="user-image">
													<img src="img/<?= ($event['postersProfilePicture']) ?>" id="poster">
												</div>
												
												<div class="comment-body">
													
													<h5  class="username-field">Kevin Nguyen</h5><br>
													
													<div class="comment-text">
														<p class="commenting-field">The comments of the person will go here. </p>
													</div>	
													
												</div>
												
												<!--Delete Button for post -->
												<div class="comment-buttons-holder">
													<ul>
														<li class="delete-btn">x</li>
													</ul>
												</div>
												
											</li>
											
											<li class="comments-holder" id="_l">
												<div class="user-image">
														<img src="img/<?= ($event['postersProfilePicture']) ?>" id="poster">
													</div>
												<div class="comment-body">
													
													<h5 class="username-field">Kevin Nguyen</h5><br>
													<div class="comment-text">
														
														<p class="commenting-field">The comments of the person will go here.The comments of the person will go here.The comments of the person will go here.The comments oThe comments of the person will go here.The comments of the person will go here.The comments of the person will go here.The comments of the person will go here.The comments of the person will go here.f the person will go here.The comments of the person will go here.The comments of the person will go here.The comments of the person will go here.The comments of the person will go here.The comments of the person will go here. </p>
														
														
													</div>
													
												</div>
												<!--Delete Button for post -->
												<div class="comment-buttons-holder">
													<ul>
														<li class="delete-btn">x</li>
													</ul>
												</div>											
											</li>										
	
										</ul>
									</div>
								</div>
	
						</section>
							 <!-- event modal -->
							<div class="modal fade details<?= ($event['event_id']) ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg">
								<div class="modal-content" id="modalcontent_details">
									 <img src="img/<?= ($event['image']) ?>" />
									 
									 <div id="modal_description">
											<h1><?= ($event['title']) ?></h1>
											
									 </div>
									 <img src="hardCodeImages/fivestars.png" id="rating_modal"/>
									 <br><br>
									 <h4><?= ($event['event_details']) ?></h4>
	
									<!--Add context here-->
									
								</div>
							  </div>
							</div>
							
					</div><!--End of Grid div-->  
				<?php endforeach; ?>
		
		
		
        </div>
		
		
 
 <script src="validate.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  
    </body>
</html>