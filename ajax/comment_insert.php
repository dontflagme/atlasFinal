<?php
     
     if(isset($_POST['task']) && $_POST['task'] == 'comment_insert')
     {
        $userId = (int)$_POST['userId'];
        $comment = addslashes(str_replace("\n", "<br>" , $_POST['comment']));
        
        $std = new stdClass();
        $std->comment_id = 24;
        $std->userId = $userId;
        $std->comment = $comment;
        $std->username = "A name goes here" ;
        $std->profile_img = "img/{{@event.postersProfilePicture}}" ;
        
        echo json_encode($std);
     }
     
     else
     {
       header('location: /328/atlasFinal/homelogin');
     }
?>