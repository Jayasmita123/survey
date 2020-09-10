<?php
session_start();
if(isset($_POST['submit']))
{
 require_once("db_connection.php");
    $name=$_POST['uname']; 
    $password=$_POST['password'];
    $_SESSION['userid']=$name;
//    echo "Welcome $_SESSION[userid]";
    header('Location: index.php');
}
?>



<!DOCTYPE html>
<html><head><title>Login page</title>
    
     <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1 ">
        
        
<!--        bootstrap file-->
            <link rel="stylesheet" href="css/bootstrap.min.css" >
        
        
<!--        javascript file-->
                <script src="bootstrap/jquery.js"></script>
                <script src="js/bootstrap.min.js"></script>
        
        
<!--        external css-->
<!--            <link rel="stylesheet" type="text/css" href="custom.css">-->

<!--        animation file-->
        <link href="bootstrap/animation.css" type="text/css" rel="stylesheet">
        <script src="bootstrap/animation.js"></script>
<!--        owl carousel file-->
        <link rel="stylesheet" href="dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="dist/assets/owl.theme.green.min.css">
        <link rel="stylesheet" href="dist/assets/owl.theme.default.min.css">
          <script src="dist/owl.carousel.min.js"></script>
        
        
<!--        font awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    
    
    <style>
    input[type=text],input[type=password]
        {
            border-radius: 3px;
	       -webkit-border-radius: 3px;
	       -moz-border-radius: 3px;
	       border: 1px solid black;
	       outline: none;
/*	color: red;*/
	       padding: 5px 8px 5px 8px;
	       box-shadow: inset 4px 4px 4px #d9d9d9;
	       -moz-box-shadow: inset 4px 4px 4px #d9d9d9;
	       -webkit-box-shadow: inset 4px 4px 4px #d9d9d9;
	       background:  ;
	       width:70%;
            margin-top: 5%;
        }
    #content
        {
            
            background-color: beige;
            margin-top: 5%;
            height: 100%;
        }
    input[type=submit]
        {
            margin-top: 10%;
            margin-bottom: 10%;
            width: 50%;
            height: 50px;
            background: #4966b1;
            color: #fff;
            padding: 16px 17px;
            font-size: 13px;
            border: none;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -o-border-radius: 5px;
            -ms-border-radius: 5px;
            cursor: pointer;
            box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -moz-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -webkit-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -o-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -ms-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7); 
        }
       input[type=submit]:hover
        {
            background: #3a518d;
        }
        #sss
        {
            background:linear-gradient(0deg,rgba(0,74,153,0.6),rgba(0,74,153,0.6)),url(image/bg-01.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 600px;
        }
/*
        input[type=text],input[type=password]:hover
        {
             box-shadow: 0 0 5px rgba(0,74,153,0.6);
        }
       
        input[type=text],input[type=password:focus
        {
            background-color: azure; 
        }
*/
        @media screen and (max-width: 800px)
        {
/*
             #sss
            {
                background:linear-gradient(0deg,rgba(0,74,153,0.6),rgba(0,74,153,0.6)),url(image/bg-01.jpg);height: 40%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                height: 100px;
            } 
*/
            
            #content
            {
                margin-top: 20%;
                padding: 30px;
            }
        }
      
         @media screen and (max-width: 1000px)
         {
              #content
            {
                margin-top: 20%;
                padding: 30px;
            }

        }
           
    </style>
    
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <div class="row justify-content-md-center" >
                 <div class="col-md-6 col-sm-6" id="content">
                        <center> <h2 style="margin-top: 15%;">Login</h2>
                            
<!--    input feild for advertiser id -->
                            <input type="text" placeholder="Name" name="uname" pattern="[A-Za-z]{1,32}" required><br>
                            
<!--    input feild for advertiser password -->
                            <input type="password" placeholder="Password" name="password" required><br>
                            
<!--submit button-->
                            <input type="submit" name="submit" placeholder="SUBMIT" style="margin-bottom: 25%;"> 
                        </center>
                    </div> 
<!--                    <div class="col-md-5" id="sss"> ></div>-->
             </div>
        </form> 
   </div>    
</body>
</html>