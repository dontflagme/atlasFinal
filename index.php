<?php

/**
 *@author: Kevin Nguyen
 *@version: 1.0
 *@date: 4.23.2017
 *This is for a blog website. It takes in basic information of the new user.
 */
//Require the autoload file
require_once('vendor/autoload.php');
session_start();

require("../../../atlas_config.php");
    
    try{
        //instantiate a database object
        $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }  
//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);




//calling the DB classes
$eventsDB = new EventsDB();
$memberDB = new MemberDB();
$joinedDB = new JoinedDB();


                  //Define a default route
                    $f3->route('GET /', function($f3) {
                        $events =  $GLOBALS['eventsDB']->allEvents();
                        $f3->set('events', $events);
                      echo Template::instance()->render('pages/Frontend/explore.html');
                     });
                    
                    //-----------------------Varifies login to see if user exists--------------------------------
                    $f3->route('POST /loginCheck', function($f3) {
                        $memberDB = new MemberDB();

                        $emailAttempt = $_POST['email'];//This is the POST input from user for email
                        $passwordAttempt = $_POST['password'];//This is the POST input from user for password
                        $memberExistsCheck = $GLOBALS['memberDB']->memberUserExists($emailAttempt, $passwordAttempt);//Checking to see if the user email exists in database
                        
                        if($memberExistsCheck){//If it is true, log the user in with the matching password and email
                           $foundMember = $GLOBALS['memberDB']->memberByEmail($emailAttempt);
                           $currentMember = new Member($foundMember['username'], $foundMember['firstname'],$foundMember['lastname'],
                                                       $foundMember['email'], $foundMember['password'], $foundMember['image']);//Createsss
                      
                           $_SESSION['currentMember'] = $currentMember;//Call $_SESSION['currentMember'] for the current member logged in.
                           
                           $f3->reroute('/homelogin');//When log in is successful the user will be redirected to the backend home screen of their profile
                        }
                        else{//Display user does not exist if the email AND password does not match in the membersDB
                            echo "Member does not exist.";
                        }
                        
                      
                     });
                    //----------------------- Define a default route--------------------------
                                    
                    $f3->route('GET /homelogin', function($f3) {
                      
                      echo Template::instance()->render('pages/backend/home_backend.html');
                     });
                    
                    //This is used to create a new user.
                    //Takes the information and adds to members database
                    $f3->route('POST /registerDB', function($f3) {
                      $_SESSION['firstName'] = $_POST['firstname'];
                      $_SESSION['lastName'] = $_POST['lastName'];
                      $_SESSION['email'] = $_POST['email'];
                      $_SESSION['password'] = $_POST['password'];
                      $_SESSION['profilePicture'] = $_POST['profilePicture'];
                      $_SESSION['username'] = $_POST['username'];
                      
                      $firstName = $_SESSION['firstName'];
                      $lastName = $_SESSION['lastName'];
                      $email = $_SESSION['email'];
                      $username = $_SESSION['username'];
                      $password = $_SESSION['password'];
                      $profilePicture = $_SESSION['profilePicture'];
                      
                      $member = new Member($username, $firstName, $lastName, $email, $password, $profilePicture);
                      
                      $_SESSION['member'] = $member;
                      echo "This is the name of the file: ". $profilePicture;
                           
                            /**
                           *
                           *  This code uploads user information for the signup including picture.
                           *
                           */
                          $target_dir = "img/";
                          $target_file = $target_dir . basename($_FILES["profilePicture"]["name"]);
                          $uploadOk = 1;
                          $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                          // Check if image file is a actual image or fake image
                          if(isset($_POST["submit"]) && isset($_FILES['profilePicture'])) {
                              $check = getimagesize($_FILES["profilePicture"]["tmp_name"]);
                              if($check !== false) {
                                  echo "File is an image - " . $check["mime"] . ".";
                                  $uploadOk = 1;
                              } else {
                                  echo "File is not an image.";
                                  $uploadOk = 0;
                              }
                          }
                          // Check if file already exists
                          if (file_exists($target_file)) {
                              echo "Sorry, file already exists.";
                              $uploadOk = 0;
                          }
                          // Check file size
                          if ($_FILES["fileToUpload"]["size"] > 2000000) {
                              echo "Sorry, your file is too large.";
                              $uploadOk = 0;
                          }
                          // Allow certain file formats
                          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                          && $imageFileType != "gif" ) {
                              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                              $uploadOk = 0;
                          }
                          // Check if $uploadOk is set to 0 by an error
                          if ($uploadOk == 0) {
                              echo "Sorry, your file was not uploaded.";
                          // if everything is ok, try to upload file
                          } else {
                              if (move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $target_file)) {
                                  echo "The file ". basename( $_FILES["profilePicture"]["name"]). " has been uploaded.";
                              } else {
                                  echo "Sorry, there was an error uploading your file.";
                              }
                          }
                          $profilePicture = basename( $_FILES["profilePicture"]["name"]);
                          $GLOBALS['memberDB']->addMember($username, $firstName, $lastName, $email, $password, $profilePicture);
                          
                     // $f3->reroute('/homelogin');
                     });
                    
                    $f3->route('GET /viewevents', function($f3) {
                      
                      echo Template::instance()->render('pages/backend/viewEvents.html');
                     });
                    
                                      //Define a default route
                    $f3->route('GET /explorebackend', function($f3) {
                      
                      echo Template::instance()->render('pages/backend/explore.html');
                     });
                    
                    $f3->route('GET /addidea', function($f3) {
                      
                      echo Template::instance()->render('pages/backend/addIdea.html');
                     });
                    
           
$f3->run();        
?>