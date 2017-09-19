<?php

/**
 *
 *  This is code that I am currently testing, the php code at the bottom is the one you made from grav.
 *
 */
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
if ($_FILES["fileToUpload"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>



<?php
/**
    $msg = "";

    //if upload button is pressed
    if(isset($_POST['upload'])){
        //This is the path to store the uploaded image
        $target = "img/" . basename($_FILES['image']['name']);
        
        //connect to the date base.
        //Start of storing things in data base
    require('database-constants.php');

    // 1. Create a connection and check to see if it was created successfully.
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
     
    $image = $_FILES['image']['name'];
	$feature = $_POST['feature'];
	$featureInt = (int) $feature;
    $title = $_POST['title'];
	$description = $_POST['description'];
	$html = $_POST['html'];

	
	
    //Query into database
     $query = "INSERT INTO feature_images"
            . "(image, title, description, html)"
            . "VALUES"
            . "('$image', '$title', '$description', '$html')";
			
			mysqli_query($dbc, $query);	//inserts
			
			$queryCounter = "SELECT * FROM feature_images WHERE title='$title'";
			$results = mysqli_query($dbc, $queryCounter);//stores the submitted data into the database table: images
			$rowFeatureId = mysqli_fetch_array($results, MYSQLI_ASSOC);//fetches the Array needed to look for the image name
			$rowNumber = (int)$rowFeatureId['id'];//turns id into an int value.
			
			
			
			//Create an update statement.
			$selectQuery = 'SELECT image FROM feature_images WHERE id =' .$featureInt; 
            $results = mysqli_query($dbc, $selectQuery);//stores the submitted data into the database table: images
			$row = mysqli_fetch_array($results, MYSQLI_ASSOC);//fetches the Array needed to look for the image name
			$singleRow = $row['image'];
			$updateQuery = "UPDATE feature_images SET image = '$image', title= '$title', description = '$description', html = '$html', feature_id = $rowNumber WHERE id = $featureInt";
			mysqli_query($dbc, $updateQuery);
			
		


            if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
                
                $msg = "Image uploaded successfully";
            }
            
            else{
                $msg="There was an error uploading the image. Have you tried hitting your PC really hard?";
            }
    
    }//End of if statement
header('Location: edit_feature_of_the_week.php');
*/
?>