$( document ).ready( function(){
   //This will fire when page is fully loaded
   console.log("JS started.....");
   $('#comment-post-btn').click( function(){
    
        //Takes what the user wrote and stores it in a var
        var _comments = $( '#comment-post-text' ).val();
        var _userId = $('#userId').val();
        var _username = $('#username').val();
       
        if(_comments.length > 0 && _userId !== null)
        {
            //changes the color of border back the the regular color if error was there
            $( '#comment-post-text' ).css('border', '1px solid #e1e1e1');
            //proceed with ajax call back.
            $.post("ajax/comment_insert.php",
                   {
                     task : "comment_insert",
                     userId :  _userId,
                     comment : _comments
                   }
 
            )
            
            .error(
                        function()
                         {
                           console.log("Error: ");
                         }
                      
                      )
            
            .success(
                        function(data)
                         {
                           //success
                           console.log("Response: " + data);
                         }
                      
                      );
            
            console.log(_comments + " " + "Username: " + _username + "User Id: " +_userId);
        }
        else
        {
            $( '#comment-post-text' ).css('border', '1px solid #ff0000');
            console.log("The text area was empty.");
        }
        
        //removes text from text area
        $( '#comment-post-text' ).val("");
   });
});