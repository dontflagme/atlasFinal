s </nav>                   
      
      
      
            <nav class="navbar navbar-inverse bg-inverse" id= "nav">
               <div id="wrapper">
             
                 <h2>&quot We travel not to escape life, but for life not to escape us.&quot &mdash; Anonymous</h2>
    
                      <!-- login modal -->
                <button class="btn btn-primary" data-toggle="modal" data-target=".login" id="login">Login</button>
                
                <div class="modal fade login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="modalcontent">
                      <!--Enter context-->
                      <p><a href="home.php" color="black" id="test1">Click this to head to the backend</a></p>
                    </div>
                  </div>
                </div>
                
                 <!-- signup modal -->
                <button class="btn btn-primary" data-toggle="modal" data-target=".signup" id="signup">Sign Up</button>
                
                <div class="modal fade signup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="modalcontent">
                     
                     <form action="#" method="post">
                         <fieldset>
                          <legend>
                             <h2 id="signup_label">Sign Up</h2> <br> <br>
                             <h4>Be Bold!</h4>
                          </legend>
                         </fieldset>
                         
                         <p><label><input type= "text" name="firstname" size="40" maxlength="40" placeholder="First Name" required="true" > *</label></p>
                         <p><label><input type= "text" name="lastname" size="20" maxlength="40" placeholder="Last Name" required="true" > *</label></p>
                         <p><label><input type= "email" name="email" size="20" maxlength="40" placeholder="Email:" required="true" > *</label></p>
                         <p><label><input type= "password" name="password" size="20" maxlength="40" placeholder="Password" required="true" > *</label></p>
                       
                         <div id="question">
                             <h4>Are you interested in Core Java *  </h4>
                             <input type="radio" name="qone" value="yes" required> Yes
                             <input type="radio" name="qone" value="no"> No
                         </div>
                    
                         <input type="submit" name="submit" value="Submit My Information" id="submit">
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