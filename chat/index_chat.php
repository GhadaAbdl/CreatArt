
    
    <link rel="stylesheet" href="chat/style.css" type="text/css" />
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="chat/chat.js"></script>






    <div id="page-wrap">
    
        <h2 id="h2Chat">Chat</h2>
        
        <p id="name-area"></p>
        
        <div id="chat-wrap"><div id="chat-area"></div></div>
        
        <form id="send-message-area">
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>
    
    </div>
    <script type="text/javascript">
    
        // ask user for name with popup prompt    
        
       <?php if(isset($_SESSION['login_user'])){?>
        var name="<?php echo $_SESSION['login_user']; ?>"; 
        <?php 
            }
            else 
            { ?>
                var name = prompt("Enter your chat name:", "Guest");
        <?php 
            }
         ?>



        
        // default name is 'Guest'
        if (!name || name === ' ') {
           name = "Guest";  
        }
        
        // strip tags
        name = name.replace(/(<([^>]+)>)/ig,"");
        
        // display name on page
        
        $("#name-area").html("You are: <span>" + name + "</span>");
        
        // kick off chat
        var chat =  new Chat();
        
        $(function() {
        

             chat.getState();
             
             // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
                                                                                                                                                                                                            });
             // watch textarea for release of key press
             $('#sendie').keyup(function(e) {   
                                 
                  if (e.keyCode == 13) { 
                  
                    var text = $(this).val();
                    var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
                        chat.send(text, name);  
                        $(this).val("");
                        
                    } else {
                    
                        $(this).val(text.substring(0, maxLength));
                        
                    }   
                    
                    
                  }
             });
            
        });
    </script>



