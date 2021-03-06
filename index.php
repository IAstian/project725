<?php
    require "mail.php";
    mail($toEmail,$subject,$body,$headers);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mail server</title>
    </head>
    <body>
        <a href="#" id="trigger">Start sending an email</a>
        <center>
            <div id="modal" class="modal">
                <div class="modal-content">
                    <span id="span">&times;</span>


                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <label for="text">Your name</label> <br> <br>
            <input type="text" name="name" id="" placeholder="Your Name"> <br> <br>
            <label for="Email">Your Email</label> <br> <br>
            <input type="Email" name="email" id="" placeholder="please enter your Email adress"> <br> <br>
            <label>Recipient Email</label> <br> <br>
            <input type="email" name="recepient" placeholder="enter the recepients email"> <br> <br>
            <label>Subject</label> <br> <br>
            <input type="text" name="subject" placeholder="subject ."> <br> <br>
            <label for="message"> Message </label> <br> <br>
            <!-- <input type="text"> -->
            <textarea name="message" id="" cols="40" rows="10" placeholder="Draft your message"></textarea> <br> <br>
            <input type="submit" value="submit" name="submit">
                </form>
                </div>
            </div>
        </center>
            
        <style>


    span{
        color: black;
        opacity: 0;
        animation-name: fade;
        animation-duration: 2s;
        animation-delay: 3s;
        animation-fill-mode: forwards;
        animation-iteration-count: 1;
        position: relative; 
        float: left;
        top: 5px;
        left: 15px; 
        font-size: 22px;
        padding: 0.5em;
        line-height: 0.5em; 
        width: 0.5em;
        border-radius: 2em;
        background-color: #f33e41;
    }
body{
        margin: 0;
        cursor: pointer;
        box-sizing: border-box; 
        padding: 10px 0 0 0;
        background: url("images/pexels\ \(3\).jpg");
        background-size: cover;
        background-repeat: no-repeat;
        overflow-x: hidden;}
      *{
          transition: all 1s cubic-bezier(1, 0, 0, 1);
          color: transparent;
          /* background-color: black; */
    }
    #trigger{
        background-color: #f33e41;

    }
a{
    text-decoration: none;
    color: black;
    background-color: rgb(16, 245, 8);
    border: 1px solid transparent;
    border-radius: 5%;
    padding: 10px 20px;position: relative;margin-top: 3%;left: 10%; 
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.modal{
    /* background-color: rgba(0,0,0,0.5); */ 
    display: none;
     width: 100%;
     height: 50vh;
     z-index: 3;
     margin: 7% 0 0 0;
    }
    .modal-content{
        height: 600px;
        width: 600px;
        background-color: rgba(0, 0, 0,0.7);
        border: 5px solid #f33e41;
        border-radius: 1%;
        border-left: none;
        border-right: none; 
        position: relative; 
        top: -150px; 
        left: 3%;
        animation-name: linux;
        animation-duration: 3s;
        animation-fill-mode: forwards;
        animation-iteration-count: 1;
        animation-timing-function: cubic-bezier(0.77, 0, 0.175, 1);
    }
    h1{
        opacity: 0;
        position: relative;
        left: -5%;
        top: 150px;
        animation-name: fade;
        animation-duration: 2s;
        animation-delay: 3s;animation-fill-mode: forwards;
        animation-timing-function: cubic-bezier(0.075, 0.82, 0.165, 1);
        color: white;
        text-transform: uppercase;
        font-size: 50px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;}
        @keyframes fade{
            from{opacity: 0;}
            to{opacity: 1;}
        }
            @keyframes linux
            {
                0%{
                    width: 0px;height: 0;}25%{width: 0;height: 0;}50%{width: 600px;height: 0;}
            100%{height: 600px;opacity: 1;}
}
form{
    opacity: 0;
    position: relative;
    top: 50px;
    animation: fade 2s ease-out;
    animation-delay: 3.5s;
    animation-fill-mode: forwards;
    animation-iteration-count: 1;
}

form input{
    width: 300px;
    height: 30px;
    padding: 5px 10px 5px 10px;
    border: 2px solid #f33e41;
    border-radius: 2px;
    font-size: 13px;
    background-color: transparent;
    color: #f33e41;
    font-family: Arial, Helvetica, sans-serif;
}
 form input:focus{
    background-color: white;
    color: black;
}

 textarea{
     background-color: transparent;
     height: 50px;
    padding: 5px 10px 5px 10px;
    border: 2px solid #f33e41;
    border-radius: 2px;
    color: white;
    background-color: transparent;
    overflow-y: hidden;
    font-size: 13px;
    font-family: Arial, Helvetica, sans-serif;
}
 ::placeholder{
    color: #f33e41;
    opacity: 1;
}
 textarea:focus{
    background-color: white;
    color: black;
}
button{
    border: 3px solid black;
    color: black;
    border-radius: 5px;
    background-color: white;
    width: 330px;
    font-size: 16px;
    letter-spacing: 3px;
    padding: 10px 10px 10px 10px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
 button:hover{
    background-color: #f33e41;
    border: 3px solid #f33e41;
    color: whitesmoke;
    border-radius: 5px;
    font-size: 16px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    cursor: pointer;
    transform: scale(0.9);
}
 h3{
    border-bottom: 4px solid #c73639;
    width: max-content;
    padding-bottom: 20px;
    font-size: 20px;
    border-start-end-radius: 15px;
    color: #f33e41;
}
 label{
     color: #f33e41;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
        </style>
        
        <script src="main.js"></script>
        </body>
        </html>