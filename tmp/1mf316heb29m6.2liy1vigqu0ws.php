<!DOCTYPE html>
<html>
    <head>
        <title>Atlas</title>
        <link rel="icon" type="image/ico" href="img/exploreicon.png" />
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href= "css/grid.css" rel="stylesheet" type="text/css">
        <link href= "css/main.css" rel="stylesheet" type="text/css">
        <link href= "css/navfooter.css" rel="stylesheet" type="text/css">
        
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
        
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <script src="js/validate.js"></script>
        
        <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="">
        
    </head>
    
    <body>


     <header>
        </nav>                   
            <nav class="navbar navbar-inverse bg-inverse" id= "nav">
               <div id="wrapper">
             
                 <h2>&quot We travel not to escape life, but for life not to escape us.&quot &mdash; Anonymous</h2>
    
                      <!-- login modal -->
                <button class="btn btn-primary" data-toggle="modal" data-target=".login" id="login">Login</button>
                
                <div class="modal fade login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="modalcontent">

                      <!--Enter context-->

                        

                        
                        <form action="./loginCheck" method="post">
                          
                            <div class="form-group">
                                <hr>
                                <label for="inputEmail">Email</label>
                                <div class="col-xs-10">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <div class="col-xs-10">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-offset-2 col-xs-10 text-center">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </div>
                        </form>
                        

                    </div>
                  </div>
                </div>
                
                 <!-- signup modal -->
                <button class="btn btn-primary" data-toggle="modal" data-target=".signup" id="signup">Sign Up</button>
                
                <div class="modal fade signup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="modalcontent">
                     
                            
                     
                     <form action="./registerDB" method="post" enctype="multipart/form-data">
                         <fieldset>
                          <legend>
                             <h2 id="signup_label">Sign Up</h2> <br> <br>
                             <h4>Be Bold</h4>
                          </legend>
                         </fieldset>
                         
                         <p><label><input type= "text" name="firstname" size="40" maxlength="40" placeholder="First Name" required="true" id="firstname" > *</label></p>
                       <!-- <div class="alert alert-danger">
                           <strong>Error: </strong><span id="firstNameError"></span>
                        </div> -->
                        <p><label><input type= "text" name="username" size="40" maxlength="40" placeholder="Username, Homie." required="true" id="username" > *</label></p>
                         <p><label><input type= "text" name="lastName" size="20" maxlength="40" placeholder="Last Name" required="true" id="lastName"> *</label></p>
                         <p><label><input type= "email" name="email" size="20" maxlength="40" placeholder="Email:" required="true" id="email"> *</label></p>
                         <p><label><input type= "password" name="password" size="20" maxlength="40" placeholder="Password" required="true" id="password"> *</label></p>
                       
                        <legend>Add a photo(*)</legend><input type="file" name="profilePicture" required="true" id="profilePicture">
                    
                        <button type="submit" name="submit">Get it done!</button>
                          <!--<script src="js/validate.js"></script>-->
                     </form>
                

                        
                    </div>

                  </div>
                </div>
 
                    <!--Search Bar-->
                    <div class="row">
                            <form action="" class="search-form" id="searchbar">
                                <div class="form-group has-feedback">
                                    <label for="search" class="sr-only">Search</label>
                                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                            </form>
                    </div>
                </div>
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
                   
                    <h2><?= ($event['title']) ?></h2>
                        
                    <p><?= ($event['event_details']) ?></p>
        
                                
                            </div>
        
                          </div>
                        </div>
                        
                        <h2><?= ($event['title']) ?></h2>
                        
                        <p><?= ($event['event_details']) ?></p>
                </div> 
                <?php endforeach; ?>
                
        

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