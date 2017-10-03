<!DOCTYPE html>
<html>
    <head>
        <title>Atlas</title>
        <link rel="icon" type="image/ico" href="img/exploreicon.png" />
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href= "css/grid.css" rel="stylesheet" type="text/css">
        <link href= "css/main.css" rel="stylesheet" type="text/css">
        <link href= "css/navfooter.css" rel="stylesheet" type="text/css">
        <link href= "css/style.css" rel="stylesheet" type="text/css">
    </head>
    

     
    
    <body>

     <header>
        </nav>                   
                   
		<nav class="navbar navbar-inverse" id="navbar">
			
			<div class="container-fluid">
				
				<img src="img/exploreicon.png" height="60" width="60" id ="icon"/>
				<h2 id="quote">&quot We travel not to escape life, but for life not to escape us.&quot &mdash; Anonymous</h2>
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
                            <form action="" class="search-form" id="searchbarBackend">
                                <div class="form-group has-feedback">
                                    <label for="search" class="sr-only">Search</label>
                                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                            </form>
                    </div>
		</nav>  
     </header>

        
       
          <div id="wrapper">  
            <div id="columns">
                <?php foreach (($events?:[]) as $event): ?>
                    <div class="grid">
                        <a href="#signup" role="button" data-toggle="modal" data-target=".viewEvent<?= ($event['event_id']) ?>" >
                            <img src="img/<?= ($event['image']) ?>" />
                        </a>
                        
                        <!-- view event modal -->
                        <div class="modal fade viewEvent<?= ($event['event_id']) ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent">
                             

                    <a href="#signup" role="button" data-toggle="modal" data-target=".viewEvent">

                     <img src="img/<?= ($event['image']) ?>" /></a>
                   
                    <h2 id="modalH2"><?= ($event['title']) ?></h2>
                    <img src="hardCodeImages/fourstar.png" id="rating_modal"/>    
                    <p id="modalP"><?= ($event['event_details']) ?></p>
        
                                
                            </div>
        
                          </div>
                        </div>
                        
                        <h2><?= ($event['title']) ?></h2>
                        <img src="hardCodeImages/fourstar.png" id="rating_modal"/>
                        <p><?= ($event['event_details']) ?></p>
                </div>

    
                    
                <?php endforeach; ?>
            </div>
        </div>
        
        <script src="http://code.jquery.com/jquery.js"></script>
        <script>
               //alert("Ouch");
            
        </script>
        
        <script src="validate.js"></script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
    </body>
</html>