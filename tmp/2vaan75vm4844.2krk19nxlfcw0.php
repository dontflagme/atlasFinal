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
				<li ><a href="rate.php" id="navLink">Log Out</a></li>
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
                    <tr>
                        <td>Edit profile</td>
                    </tr>                            
                 </table>
            </div>
		  </div>
                
                
           
        </header>

        <div id="wrapper">
            <section id="banner_section">
                <img src="https://viewbug_com.s3.amazonaws.com/media/images/contests/contest7664_banner.jpg" id="banner"/>
                <img src="img/default_pic.jpg"/ id="profile_picture">
                <h3 id="name_banner">Kevin McKickAss</h3>
            </section>
            <div id="columns">
                <div class="grid">
                    <img src="img/default_pic.jpg"/ id="poster"><br>
                    <section id="poster_section">
                        <h4>Kevin McKickAss</h4><br>
                        <h5>posted an hour ago</h5><br>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Seattlenighttimequeenanne.jpg/449px-Seattlenighttimequeenanne.jpg" />   
                    </section>

                            <h4>Kerry Park</h4><br>
                              <h5>Kerry Park
                                    Often called Lower Kerry Park, this part of the park is below the famous viewpoint.
                                    A fun place to frolic, it offers a large lawn area, landscaping, paths, neighborhood
                                    gathering area and children's play equipment. Franklin Place, across the street from Bayview-Kinnear to the </h5><br>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details" id="details">View all comments</button>
                     
                        <div class="modal fade details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                 <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Seattlenighttimequeenanne.jpg/449px-Seattlenighttimequeenanne.jpg" />
                                 
                                 <div id="modal_description">
                                        <h1>Kerry Park</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Often called Lower Kerry Park, this part  of the park is below the famous viewpoint.
                                 A fun place to frolic, it offers a large lawn area, landscaping, paths, neighborhood
                                 gathering area and children's play equipment. Franklin Place, across the street from
                                 Bayview-Kinnear to the southeast, is also part of Kerry Park property.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                    
                    <img src="img/default_pic.jpg"/ id="poster"><br>
                    <section id="poster_section">
                        <h4>Kevin McKickAss</h4><br>
                        <h5>posted an hour ago</h5><br>
                    </section>
                   
                        <img src="https://i.kinja-img.com/gawker-media/image/upload/s--ELrsBT8h--/c9pd8amxevnsn36ldwd5.jpg" />
                        
                       
                            <h4>I want to see Utah at night</h4><br>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details1" id="details">Details</button>
                     
                        <div class="modal fade details1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                 <img src="https://i.kinja-img.com/gawker-media/image/upload/s--ELrsBT8h--/c9pd8amxevnsn36ldwd5.jpg" />
                                 
                                 <div id="modal_description">
                                        <h1>Camping in the the middle of no where</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>With over 45,000 reservable facilities at over 1,700 locations,
                                 the NRRS is the largest outdoor recreation reservation service in the country.
                                 Whether you're heading North to Alaska's Tongass National Forest, South to Florida's Lake Okeechobee,
                                 East to North Carolina's Blue Ridge Parkway,
                                 or West to California's Los Padres National Forest, you can reserve your place under the stars with the NRRS.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->

                <div class="grid">
                   
                        <img src="https://upload.wikimedia.org/wikipedia/en/a/ab/La_La_Land_(film).png" />
                        
                       
                            <h4>Let's watch La La Land</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details2" id="details">Details</button>
                     
                        <div class="modal fade details2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                 <iframe width="854" height="480" src="https://www.youtube.com/embed/0pdqf4P9MB8" frameborder="0" allowfullscreen></iframe>
                                 
                                 <div id="modal_description">
                                        <h1>Anyone want to watch La La Land?</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Sebastian (Ryan Gosling) and Mia (Emma Stone) are drawn together by their common
                                 desire to do what they love. But as success mounts they are faced with decisions that begin to
                                 fray the fragile fabric of their love affair,
                                 and the dreams they worked so hard to maintain in each other threaten to rip</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                                
                <div class="grid">
                   
                        <img src="https://mjfimages.files.wordpress.com/2013/06/mount_rainier_8-26-12_5d_005.jpg?w=1000" />
                        
                       
                            <h4>Anyone want to go camping?</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details3" id="details">Details</button>
                     
                        <div class="modal fade details3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                  <img src="https://mjfimages.files.wordpress.com/2013/06/mount_rainier_8-26-12_5d_005.jpg?w=1000" />
                                 
                                 <div id="modal_description">
                                        <h1>Camp under the stars on Mt. Ranier</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Done it, did it, nailed it.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->

                <div class="grid">
                   
                        <img src="https://upload.wikimedia.org/wikipedia/en/f/fe/Gifted_film_poster.jpg" />
                        
                       
                            <h4>Anyone want to go watch Gifted?</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details4" id="details">Details</button>
                     
                        <div class="modal fade details4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                <iframe width="854" height="480" src="https://www.youtube.com/embed/tI01wBXGHUs" frameborder="0" allowfullscreen></iframe>
                                 
                                 <div id="modal_description">
                                        <h1>Anyone want to go watch Gifted?</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Frank Adler (Chris Evans) is a single man raising a child prodigy -
                                 his spirited young niece Mary (Mckenna Grace) - in a coastal town in Florida. Frank's plans for a normal school life for
                                 Mary are foiled when the 7-year-old's mathematical abilities come to the attention of Frank's formidable mother</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="https://www.whistler.com/images/header/white-water-rafting.jpg" />
                        
                       
                            <h4>Anyone Want to white river raft?</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details5" id="details">Details</button>
                     
                        <div class="modal fade details5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                <img src="https://www.whistler.com/images/header/white-water-rafting.jpg" />
                                 
                                 <div id="modal_description">
                                        <h1>Anyone Want to white river raft?</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Rafting and white water rafting are recreational outdoor activities which use an inflatable raft to navigate a river or other body of water.
                                 This is often done on whitewater or different degrees of rough water, and generally
                                 represents a new and challenging environment for participants.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="https://img.washingtonpost.com/rf/image_480w/2010-2019/WashingtonPost/2016/10/31/Travel/Images/observatoire_meganticreserve_mondiale_ciel_etoile1477949945.jpg?uuid=dVqHvp-yEeaIZG-JLK0IZQ" />
                        
                       
                            <h4>Obervatory</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details6" id="details">Details</button>
                     
                        <div class="modal fade details6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                <img src="https://img.washingtonpost.com/rf/image_480w/2010-2019/WashingtonPost/2016/10/31/Travel/Images/observatoire_meganticreserve_mondiale_ciel_etoile1477949945.jpg?uuid=dVqHvp-yEeaIZG-JLK0IZQ" />
                                 
                                 <div id="modal_description">
                                        <h1>Obervatory</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>An observatory is a location used for observing terrestrial or celestial events. Astronomy,
                                 climatology/meteorology, geology, oceanography and volcanology are examples of disciplines for
                                 which observatories have been constructed.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="https://www.joytunes.com/images/misc/shutter/pianobeginner.jpg" />
                        
                       
                            <h4>Learn to play closer on piano</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details7" id="details">Details</button>
                     
                        <div class="modal fade details7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                <iframe width="854" height="480" src="https://www.youtube.com/embed/n1yS7WdYLZ8" frameborder="0" allowfullscreen></iframe>
                                 
                                 <div id="modal_description">
                                        <h1>Learn to play closer on piano</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>I just want to be good at piano in general, but this is one of my favorite songs.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="http://www.seriouseats.com/images/2014/04/20140427-291159-BoilingPoint-HouseSpecial.JPG" />
                        
                       
                            <h4>Boiling Point Ramen!</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details8" id="details">Details</button>
                     
                        <div class="modal fade details8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                <img src="http://www.seriouseats.com/images/2014/04/20140427-291159-BoilingPoint-HouseSpecial.JPG" />
                                 
                                 <div id="modal_description">
                                        <h1>Boiling Point Ramen!</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Counter-serve chain offering Pan-Asian hot-pot soups, desserts & tea in a relaxed, stylish setting.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMjI1MjkzMjczMV5BMl5BanBnXkFtZTgwNDk4NjYyMTI@._V1_UX182_CR0,0,182,268_AL_.jpg" />
                        
                       
                            <h4>Go see Logan!</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details9" id="details">Details</button>
                     
                        <div class="modal fade details9" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                <iframe width="854" height="480" src="https://www.youtube.com/embed/Div0iP65aZo" frameborder="0" allowfullscreen></iframe>
                                 <div id="modal_description">
                                        <h1>Go see Logan!</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>In the near future, a weary Logan (Hugh Jackman) cares for an ailing Professor X (Patrick Stewart) at a remote outpost on the Mexican border.
                                 His plan to hide from the outside world gets upended when he meets a young mutant (Dafne Keen)
                                 who is very much like him. Logan must now protect the girl and … </h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->                
  
                <div class="grid">
                   
                        <img src="http://letsbangbang.com/wp-content/uploads/2013/08/Paintball-Photos.jpg" />
                        
                       
                            <h4>Get people together for paintball</h4>
                                                        <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details10" id="details">Details</button>
                     
                        <div class="modal fade details10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                 <img src="http://letsbangbang.com/wp-content/uploads/2013/08/Paintball-Photos.jpg" />
                                 <div id="modal_description">
                                        <h1>Get people together for paintball</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Anyone up for paintball? </h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="http://www.oddcities.com/wp-content/uploads/2014/05/publicmarket1.jpg" />
                        
                       
                            <h4>Walk Around Pikes Place</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details11" id="details">Details</button>
                     
                        <div class="modal fade details11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                 <img src="http://www.oddcities.com/wp-content/uploads/2014/05/publicmarket1.jpg" />
                                 <div id="modal_description">
                                        <h1>Walk Around Pikes Place</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Let's take a walk around pike place. </h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Seattlenighttimequeenanne.jpg/449px-Seattlenighttimequeenanne.jpg" />
                        
                       
                            <h4>Kerry Park</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details12" id="details">Details</button>
                     
                        <div class="modal fade details12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                 <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Seattlenighttimequeenanne.jpg/449px-Seattlenighttimequeenanne.jpg" />
                                 
                                 <div id="modal_description">
                                        <h1>Kerry Park</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Often called Lower Kerry Park, this part  of the park is below the famous viewpoint.
                                 A fun place to frolic, it offers a large lawn area, landscaping, paths, neighborhood
                                 gathering area and children's play equipment. Franklin Place, across the street from
                                 Bayview-Kinnear to the southeast, is also part of Kerry Park property.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="https://i.kinja-img.com/gawker-media/image/upload/s--ELrsBT8h--/c9pd8amxevnsn36ldwd5.jpg" />
                        
                       
                            <h4>I want to see Utah at night</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details13" id="details">Details</button>
                     
                        <div class="modal fade details13" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                 <img src="https://i.kinja-img.com/gawker-media/image/upload/s--ELrsBT8h--/c9pd8amxevnsn36ldwd5.jpg" />
                                 
                                 <div id="modal_description">
                                        <h1>Camping in the the middle of no where</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>With over 45,000 reservable facilities at over 1,700 locations,
                                 the NRRS is the largest outdoor recreation reservation service in the country.
                                 Whether you're heading North to Alaska's Tongass National Forest, South to Florida's Lake Okeechobee,
                                 East to North Carolina's Blue Ridge Parkway,
                                 or West to California's Los Padres National Forest, you can reserve your place under the stars with the NRRS.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->

                <div class="grid">
                   
                        <img src="https://upload.wikimedia.org/wikipedia/en/a/ab/La_La_Land_(film).png" />
                        
                       
                            <h4>Let's watch La La Land</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details14" id="details">Details</button>
                     
                        <div class="modal fade details14" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                 <iframe width="854" height="480" src="https://www.youtube.com/embed/0pdqf4P9MB8" frameborder="0" allowfullscreen></iframe>
                                 
                                 <div id="modal_description">
                                        <h1>Anyone want to watch La La Land?</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Sebastian (Ryan Gosling) and Mia (Emma Stone) are drawn together by their common
                                 desire to do what they love. But as success mounts they are faced with decisions that begin to
                                 fray the fragile fabric of their love affair,
                                 and the dreams they worked so hard to maintain in each other threaten to rip</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                                
                <div class="grid">
                   
                        <img src="https://mjfimages.files.wordpress.com/2013/06/mount_rainier_8-26-12_5d_005.jpg?w=1000" />
                        
                       
                            <h4>Anyone want to go camping?</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details15" id="details">Details</button>
                     
                        <div class="modal fade details15" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                  <img src="https://mjfimages.files.wordpress.com/2013/06/mount_rainier_8-26-12_5d_005.jpg?w=1000" />
                                 
                                 <div id="modal_description">
                                        <h1>Camp under the stars on Mt. Ranier</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Done it, did it, nailed it.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->

                <div class="grid">
                   
                        <img src="https://upload.wikimedia.org/wikipedia/en/f/fe/Gifted_film_poster.jpg" />
                        
                       
                            <h4>Anyone want to go watch Gifted?</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details16" id="details">Details</button>
                     
                        <div class="modal fade details16" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                <iframe width="854" height="480" src="https://www.youtube.com/embed/tI01wBXGHUs" frameborder="0" allowfullscreen></iframe>
                                 
                                 <div id="modal_description">
                                        <h1>Anyone want to go watch Gifted?</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Frank Adler (Chris Evans) is a single man raising a child prodigy -
                                 his spirited young niece Mary (Mckenna Grace) - in a coastal town in Florida. Frank's plans for a normal school life for
                                 Mary are foiled when the 7-year-old's mathematical abilities come to the attention of Frank's formidable mother</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="https://www.whistler.com/images/header/white-water-rafting.jpg" />
                        
                       
                            <h4>Anyone Want to white river raft?</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details17" id="details">Details</button>
                     
                        <div class="modal fade details17" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                <img src="https://www.whistler.com/images/header/white-water-rafting.jpg" />
                                 
                                 <div id="modal_description">
                                        <h1>Anyone Want to white river raft?</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Rafting and white water rafting are recreational outdoor activities which use an inflatable raft to navigate a river or other body of water.
                                 This is often done on whitewater or different degrees of rough water, and generally
                                 represents a new and challenging environment for participants.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="https://img.washingtonpost.com/rf/image_480w/2010-2019/WashingtonPost/2016/10/31/Travel/Images/observatoire_meganticreserve_mondiale_ciel_etoile1477949945.jpg?uuid=dVqHvp-yEeaIZG-JLK0IZQ" />
                        
                       
                            <h4>Obervatory</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details18" id="details">Details</button>
                     
                        <div class="modal fade details18" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                <img src="https://img.washingtonpost.com/rf/image_480w/2010-2019/WashingtonPost/2016/10/31/Travel/Images/observatoire_meganticreserve_mondiale_ciel_etoile1477949945.jpg?uuid=dVqHvp-yEeaIZG-JLK0IZQ" />
                                 
                                 <div id="modal_description">
                                        <h1>Obervatory</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>An observatory is a location used for observing terrestrial or celestial events. Astronomy,
                                 climatology/meteorology, geology, oceanography and volcanology are examples of disciplines for
                                 which observatories have been constructed.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="https://www.joytunes.com/images/misc/shutter/pianobeginner.jpg" />
                        
                       
                            <h4>Learn to play closer on piano</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details19" id="details">Details</button>
                     
                        <div class="modal fade details19" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                <iframe width="854" height="480" src="https://www.youtube.com/embed/n1yS7WdYLZ8" frameborder="0" allowfullscreen></iframe>
                                 
                                 <div id="modal_description">
                                        <h1>Learn to play closer on piano</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>I just want to be good at piano in general, but this is one of my favorite songs.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="http://www.seriouseats.com/images/2014/04/20140427-291159-BoilingPoint-HouseSpecial.JPG" />
                        
                       
                            <h4>Boiling Point Ramen!</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details20" id="details">Details</button>
                     
                        <div class="modal fade details20" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                <img src="http://www.seriouseats.com/images/2014/04/20140427-291159-BoilingPoint-HouseSpecial.JPG" />
                                 
                                 <div id="modal_description">
                                        <h1>Boiling Point Ramen!</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Counter-serve chain offering Pan-Asian hot-pot soups, desserts & tea in a relaxed, stylish setting.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMjI1MjkzMjczMV5BMl5BanBnXkFtZTgwNDk4NjYyMTI@._V1_UX182_CR0,0,182,268_AL_.jpg" />
                        
                       
                            <h4>Go see Logan!</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details21" id="details">Details</button>
                     
                        <div class="modal fade details21" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                <iframe width="854" height="480" src="https://www.youtube.com/embed/Div0iP65aZo" frameborder="0" allowfullscreen></iframe>
                                 <div id="modal_description">
                                        <h1>Go see Logan!</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>In the near future, a weary Logan (Hugh Jackman) cares for an ailing Professor X (Patrick Stewart) at a remote outpost on the Mexican border.
                                 His plan to hide from the outside world gets upended when he meets a young mutant (Dafne Keen)
                                 who is very much like him. Logan must now protect the girl and … </h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->                
  
                <div class="grid">
                   
                        <img src="http://letsbangbang.com/wp-content/uploads/2013/08/Paintball-Photos.jpg" />
                        
                       
                            <h4>Get people together for paintball</h4>
                                                        <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details22" id="details">Details</button>
                     
                        <div class="modal fade details22" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                 <img src="http://letsbangbang.com/wp-content/uploads/2013/08/Paintball-Photos.jpg" />
                                 <div id="modal_description">
                                        <h1>Get people together for paintball</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Anyone up for paintball? </h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="http://www.oddcities.com/wp-content/uploads/2014/05/publicmarket1.jpg" />
                        
                       
                            <h4>Walk Around Pikes Place</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details23" id="details">Details</button>
                     
                        <div class="modal fade details23" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                 <img src="http://www.oddcities.com/wp-content/uploads/2014/05/publicmarket1.jpg" />
                                 <div id="modal_description">
                                        <h1>Walk Around Pikes Place</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Let's take a walk around pike place. </h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="http://www.seriouseats.com/images/2014/04/20140427-291159-BoilingPoint-HouseSpecial.JPG" />
                        
                       
                            <h4>Boiling Point Ramen!</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details24" id="details">Details</button>
                     
                        <div class="modal fade details24" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                <img src="http://www.seriouseats.com/images/2014/04/20140427-291159-BoilingPoint-HouseSpecial.JPG" />
                                 
                                 <div id="modal_description">
                                        <h1>Boiling Point Ramen!</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Counter-serve chain offering Pan-Asian hot-pot soups, desserts & tea in a relaxed, stylish setting.</h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMjI1MjkzMjczMV5BMl5BanBnXkFtZTgwNDk4NjYyMTI@._V1_UX182_CR0,0,182,268_AL_.jpg" />
                        
                       
                            <h4>Go see Logan!</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details25" id="details">Details</button>
                     
                        <div class="modal fade details25" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                <iframe width="854" height="480" src="https://www.youtube.com/embed/Div0iP65aZo" frameborder="0" allowfullscreen></iframe>
                                 <div id="modal_description">
                                        <h1>Go see Logan!</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>In the near future, a weary Logan (Hugh Jackman) cares for an ailing Professor X (Patrick Stewart) at a remote outpost on the Mexican border.
                                 His plan to hide from the outside world gets upended when he meets a young mutant (Dafne Keen)
                                 who is very much like him. Logan must now protect the girl and … </h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->                
  
                <div class="grid">
                   
                        <img src="http://letsbangbang.com/wp-content/uploads/2013/08/Paintball-Photos.jpg" />
                        
                       
                            <h4>Get people together for paintball</h4>
                                                        <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details26" id="details">Details</button>
                     
                        <div class="modal fade details26" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                 <img src="http://letsbangbang.com/wp-content/uploads/2013/08/Paintball-Photos.jpg" />
                                 <div id="modal_description">
                                        <h1>Get people together for paintball</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Anyone up for paintball? </h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->
                
                <div class="grid">
                   
                        <img src="http://www.oddcities.com/wp-content/uploads/2014/05/publicmarket1.jpg" />
                        
                       
                            <h4>Walk Around Pikes Place</h4>
                            <img src="img/star_three.png" id="rating"/>
                   

                         <!-- signup modal -->
                      <button class="btn btn-primary" data-toggle="modal" data-target=".details27" id="details">Details</button>
                     
                        <div class="modal fade details27" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="modalcontent_details">
                                 <img src="http://www.oddcities.com/wp-content/uploads/2014/05/publicmarket1.jpg" />
                                 <div id="modal_description">
                                        <h1>Walk Around Pikes Place</h1>
                                 </div>
                                 <img src="img/star_three.png" id="rating_modal"/>
                                 
                                 <h4>Let's take a walk around pike place. </h4>

                                <!--Add context here-->
                            </div>
                          </div>
                        </div>
                </div><!--End of Grid div-->                   
            </div>
        </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  
    </body>
</html>