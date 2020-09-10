<?php 
    session_start();
if(isset($_POST['submit']))
{
    require_once("db_connection.php");
    $company_name=$_POST['company_name'];
    $user_name=$_POST['user_name'];
    $address=$_POST['address'];
    $email=$_POST['email']; 
    $website=$_POST['website']; 
    $q1=$_POST['evaluaton1'];
    $q2=$_POST['evaluaton2'];
    $q3=$_POST['evaluaton3'];
    $c1=$_POST['comment_1'];
    $c2=$_POST['comment_2'];
    $c3=$_POST['comment_3'];
    $emp_name= $_SESSION['userid'];
    date_default_timezone_set('Asia/Kolkata');
    $time=date("h:i:sa");
    
     $lt=$_POST['loc1'];
     $lg=$_POST['loc2'];
       
//    echo "latitude " . $lt;
//    echo "Longitude " . $lg;
    

//    function getaddress($lat,$lng)
//  {
//     $url = 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCx7cqbJ0yQkFuL5iOkrQMZY-31eOQty6c&latlng='.trim($lat).','.trim($lng).'&sensor=false';
//     $json = @file_get_contents($url);
//     $data=json_decode($json);
//        print_r($data);
//     $status = $data->status;
//     if($status=="OK")
//     {
//       return $data->results[0]->formatted_address;
//     }
//     else
//     {
//       return false;
//     }
//  }
//    print_r(getaddress($lt,$lg));
//    
//    

    
    $number = count($_POST['phone']); 
//    $n=array();
//    echo"<script>alert('$number');</script>";
    if($number > 0)  
    {  
        for($i=0; $i<$number; $i++)  
            
        { 
            $n=$_POST['phone'][$i];
//           echo"<script>alert('$n');</script>"; 
     
       
//        echo"<script>alert('$n');</script>";
////        $rr=(string)$n;
//        $ss=str_split($n,"10");
//        $ar=implode(",",$ss);
//        echo"<script>alert('$ar');</script>";
//            if(trim($_POST['phone'][$i] !=''))
//            {
//            $n=$_POST['phone'][$i];
//                echo"<script>alert('$n');</script>";
//                echo"<script>alert('$n');</script>";
            $sl="INSERT INTO phone_number_details (employee_name,company_name,client_name,phone_numbers) VALUES('$emp_name','$company_name','$user_name','$n')";
            $re=mysqli_query($connection, $sl);
       }
    }
            $sq="INSERT INTO survey_details (employee_name,survey_company_name,survey_user_name,survey_address,	survey_email_id,survey_website,question_1,comment_1,question_2,comment_2,question_3,comment_3,date,time,latitude,longitude) VALUES('$emp_name','$company_name','$user_name','$address','$email','$website','$q1','$c1','$q2','$c2', '$q3','$c3',CURRENT_DATE(),'$time','$lt','$lg')";
//                $res=mysqli_query($connection, $sq);
//            }    
            
//        } 
//        }
//        echo"<script>alert('Thank you for your review');window.location='index.php';</script>";
             
//    }
        
        if(mysqli_query($connection, $sq))
        {
             echo"<script>alert('Thank you for your review');window.location='indexc.php';</script>";
            
        }
         else{
                echo "<script>alert('Your review is not saved please try again...');/script>";
            }
    }
//    else  
//    {  
//        echo "<script>alert('Please enter the values.....');
//        window.location='index.php';</script>";  
//    } 

?> 




<!doctype html>
<html><head><title>survey form</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script src="http://maps.googleapis.com/maps/api/js?key=<KEY>&sensor=false"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
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

    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo API_KEY; ?>&callback=initMap"
	async defer></script>

<!-- style for input fields and buttons-->
    <style>
/*        style for radio button*/
         input[type=radio]
        {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            display: inline-block;
            position: relative;
            background-color: #f1f1f1;
            color: #666;
            top: 10px;
            height: 30px;
            width: 30px;
            border: 0;
            border-radius: 50px;
            cursor: pointer;     
            margin-right: 7px;
            outline: none;
            border: 1px solid black;
        }
        input[type=radio]:checked::before
        {
            position: absolute;
            font: 13px/1 'Open Sans', sans-serif;
            left: 11px;
            top: 3px;
            content: '\02143';
            transform: rotate(40deg);
            color: blue;
            font-weight: 100px;
            font-size: 20px;
        }
        input[type=radio]:hover
        {
            background-color: aquamarine;
        }
        input[type=radio]:checked
        {
            background-color: #f1f1f1;
        }
        
/*        style for cotainer div*/
        #con
        {
            width: 50%;
            height: 100%;
            border-radius: 10px;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            -o-border-radius: 10px;
            -ms-border-radius: 10px;
            box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -moz-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -webkit-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            -o-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
             -ms-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
            padding-left: 10px;
            margin-top: 4%;
            padding: 20px;
            background-color: white;
                
        }
        
/*        style for input feilds*/
        input[type=text],input[type=email],textarea,input[type=tel],input[type=url]
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
	       width:50%;
            margin-top: 5%;
        }
        input:hover
        {
             box-shadow: 0 0 5px rgba(0,74,153,0.6);
        }
        textarea:hover
        {
             box-shadow: 0 0 5px rgba(0,74,153,0.6);
        }
        input:focus
        {
            background-color: azure; 
        }
        textarea:focus
        {
            background-color: azure; 
        }
/*
        input[type=tel]{
              border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid black;
	outline: none;
	color: red;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 4px 4px 4px #d9d9d9;
	-moz-box-shadow: inset 4px 4px 4px #d9d9d9;
	-webkit-box-shadow: inset 4px 4px 4px #d9d9d9;
	background:  ;
	width:50%;
            margin-top: 5%;
        }
        
*/
        
    #ph
        {
          width:100%;  
        }
        table
        {
            width:52%;
            margin-left: 25%;
        }
        
       input[type=submit]
        {
            margin-top: 10%;
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
       input[type=submit]:hover {
            background: #3a518d;

        }
        body
        {
             background:linear-gradient(0deg,rgba(0,74,153,0.6),rgba(0,74,153,0.6)), url(image/body-bg.jpg);width: 100%; height: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow-x: hidden;
        }
        
       @media screen and (max-width: 800px)
        {
            #con
            {
                width: 100%;
            }
             body
        {
             background-color: white;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow-x: hidden;
        }
           
            input[type=text],input[type=email],textarea,input[type=tel],input[type=url]
            {
                width: 88%;
            }
/*
            #ph{width: 300px; }
            table{width: 2300px;
                margin-left: -50%;
*/
             .phone-list
        {
            width: 100%;
/*            margin-bottom: 0%;*/
/*            margin-left: 6%;*/
           
        }
              table
        {
            width:100%;
        }
            }
/*            #add{margin-left: -5%; }*/
            
        }
         @media screen and (max-width: 1000px)
        {
            #con
            {
                width: 100%;
            }
             body
        {
             background-color: white;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow-x: hidden;
        }
           
            input[type=text],input[type=email],textarea,input[type=tel],input[type=url]
            {
                width: 90%;
            }
/*
            #ph{width: 300px; }
            table{width: 2300px;
                margin-left: -50%;
*/
             .phone-list
        {
            width: 100%;
            margin-bottom: 0%;
            
           
        }
              table
        {
            width:100%;
        }
            }
/*            #add{margin-left: -5%; }*/
            
        }
/*
          @media screen and (max-width: 1400px)
        {
            #con
            {
                width: 100%;
            }
             body
        {
             background-color: white;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow-x: hidden;
        }
        }
*/
        
        
/*
        @media and screen(width:600px)
        {
            input[type=submit]
            {
                margin-left: 45%;
            }
            .container
            {
                width: 100%;
                height: 100%;
            }
            table
        {
            width: 500px;
            margin-left: 12%;
        }
            body
        {
            overflow-x: hidden;
             background:linear-gradient(0deg,rgba(0,74,153,0.6),rgba(0,74,153,0.6)), width: 100%; height: 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    overflow-x: hidden;
        }
            input[type=tel]
            {
                width: 30%;
            }
        }
*/
/*
        @media and screen(width:1000px)
        {
            input[type=tel]
            {
                width: 20%;
            }
               table
        {
            width: 500px;
            margin-left: 12%;
        }
            .container
            {
                width: 700px;
                height: 100%;
            }
            input[type=text],input[type=email],textarea
            {
                width: 100%;
            }
        }
        
*/
        
/*
        .phone-input{
	margin-bottom:8px;
            width: 60%;
            height: 50%;
}
        .btn-danger
        {
            width: 100%;
            margin-bottom:50px;
            margin-bottom: -10px;
        }
*/
/*
        table
        {
            width: 700px;
            margin-left: 12%;
        }
        
*/
        .phone-list
        {
            width: 50%;
            margin-bottom: 0%;
            margin-left: 6%;
           
        }
        #add
        {
            margin-top: 20%;
/*             margin-bottom: -2%;*/
        }
        #btn
        {
            display: none;
        }
    </style>
    </head>
    <body>
        <button id="btn" onclick="getLocation()">Get Location</button>
        <p id="demo"></p>
<!--
        <button id = "find-me">Show my location</button><br/>
<p id = "status"></p>
<a id = "map-link" target="_blank"></a>
-->
<!--
        <p>
  Your location is <span id="latitude">0.00</span>°
  latitude by <span id="longitude">0.00</span>° longitude.
</p>
<button id="get-location">
  Get My Location
</button>
-->
        
     
<!--
        <script>
        
            	$(function(){
		
			$(document.body).on('click', '.changeType' ,function(){
				$(this).closest('.phone-input').find('.type-text').text($(this).text());
				$(this).closest('.phone-input').find('.type-input').val($(this).data('type-value'));
			});
			
			$(document.body).on('click', '.btn-remove-phone' ,function(){
				$(this).closest('.phone-input').remove();
			});
			
			
			$('.btn-add-phone').click(function(){

				var index = $('.phone-input').length + 1;
				
				$('.phone-list').append(''+
						'<div class="input-group phone-input">'+
							'<input type="tel" name="phone['+index+'][number]" class="form-control" placeholder="Phone Number" />'+
							'<input type="hidden" name="phone['+index+'][type]" class="type-input" value="" />'+
							'<span class="input-group-btn" style="margin-top:5%;">'+
								'<button class="btn btn-danger btn-remove-phone" type="button"><span class="glyphicon glyphicon-remove" ><i class="fa fa-times" aria-hidden="true"></i></span></button>'+
							'</span>'+
						'</div>'
				);

			});
			
		});
        
        
        </script>
-->
        <center>
        <div  id="con">
            <form action="index.php" method="post"> <h1>Survey Form</h1>
            <div class="row justify-content-md-center">
                <div class="col-md-12">

                                                       
<!--                    input fleid for phone number-->
                    <div class="phone-list">
				
					<div class="input-group phone-input" >
<!--
						<span class="input-group-btn">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="type-text">Type</span> <span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu" style="margin-top:3%;">
								<li><a class="changeType" href="javascript:;" data-type-value="phone">Phone</a></li>
								<li><a class="changeType" href="javascript:;" data-type-value="fax">Fax</a></li>
								<li><a class="changeType" href="javascript:;" data-type-value="mobile">Mobile</a></li>
							</ul>
						</span>
-->
                        <table cellspacing="1" id="dynamic_field">
						<tr><td><input type="tel" name="phone[]" id="ph"  placeholder="Phone Number"  maxlength="10" pattern="[6789][0-9]{9}" ></td><td><button name="add" id="add" class="btn btn-success  glyphicon glyphicon-plus" ><i class="fa fa-plus" aria-hidden="true"></i></button></td></tr>
                        </table>    
					</div>
				</div>     
                    
          <div>          
 <!--  input fleid for company name of client-->       
        <input type="text" name="company_name" placeholder="Company Name" pattern="[A-Za-z]{1,32}" required><br>
                    
 <!--  input fleid for client name -->                
        <input type="text" name="user_name" placeholder="Client Name" pattern="[A-Za-z]{1,32}" required><br>
                    
<!--
                    <table cellspacing="1" id="item_table">
                        <tr>
                   <td> <input type="tel"  name="phone_number[]" id="phone_number" placeholder="Phone Number" pattern="[6789][0-9]{9}"></td><br>
                    <td><button name="add" id="add" class="btn btn-success btn-sm add" style="margin-top:10%;"><span class="glyphicon glyphicon-plus"></span>Add number</button></td>
                    </tr>    
                    </table>
-->
                    

                    
                    
<!--  input fleid for  address of client -->
        <input type="text" name="address" placeholder="Address" pattern="[A-Za-z]{1,32}" required><br>
                    
<!--  input fleid for email id of the client -->
        <input type="email" name="email" placeholder="Email" pattern="[^ @]*@[^ @]*" ><br>
                    
<!--  input fleid for website of the company -->                    
        <input type="text" name="website" placeholder="Website address" pattern="/^w{3}\.[a-z]+\.?[a-z{2,3}(|\.[a-z]{2,3})*$/)]"><br>
                    
                    
                    
        </div>            
                    
                    
<!--  input fleid cquestion about web develop -->                    
               <h4 style="margin-top:4%;">Do you have web site for your company?</h4>
                    <input type="radio" name="evaluaton1" value="Yes"  >Yes
                   <input type="radio" name="evaluaton1" value="No"> No<br>
                    
<!--  Notes about web development  -->
                    <textarea cols="3" name="comment_1" rows="5" style="margin-top:4%;"></textarea>
                    
<!--  input fleid cquestion about event management--> 
                    <h4 style="margin-top:4%;"> Planning for any event ?</h4>
                    <input type="radio" name="evaluaton2" value="Yes"  >Yes
                   <input type="radio" name="evaluaton2" value="No"> No<br>
                    
<!--  Notes about Event management  -->
                    <textarea cols="3" name="comment_2" rows="5" style="margin-top:4%;"></textarea>
                    
<!--  input fleid cquestion about vedio making and photography--> 
                    <h4 style="margin-top:4%;">Do you want any vedio making and photography ?</h4>
                    <input type="radio" name="evaluaton3" value="Yes"  >Yes
                   <input type="radio" name="evaluaton3" value="No"> No<br>
                    
<!--  Notes about vedio making and photography  -->
                    <textarea cols="3" name="comment_3" rows="5" style="margin-top:4%;"></textarea> 
                    <input type="hidden" id="lat" name="loc1" value="">
                    <input type="hidden" id="long" name="loc2" value="">
                    
<!--submit button-->
                    <input type="submit" name="submit" placeholder="SUBMIT">
                   
                </div> 
            </div>
                
        </form>
    </div>
 </center>
   
</body>
</html>
<script src="ajax_script.js"></script>
<script>
    
//    $("#btn").click(function () { //user clicks button
//	if ("geolocation" in navigator){ //check geolocation available 
//		//try to get user current location using getCurrentPosition() method
//		navigator.geolocation.getCurrentPosition(function(position){ 
//				$("#demo").html("Found your location <br />Lat : "+position.coords.latitude+" </br>Lang :"+ position.coords.longitude);
//			});
//	}else{
//		console.log("Browser doesn't support geolocation!");
//	}
//});
//    $(document).ready(function(){
//        var x = document.getElementById("demo");
//        
//        function onPositionUpdate(position)
//            {
//                var lat = position.coords.latitude;
//                var lng = position.coords.longitude;
//                alert("Current position: " + lat + " " + lng);
//            }
//
//            if(navigator.geolocation)
//                navigator.geolocation.getCurrentPosition(onPositionUpdate);
//            else
//                alert("navigator.geolocation is not available");
//        
        
//         function getLocation() {
//            
//            if (navigator.geolocation) {
//                navigator.geolocation.getCurrentPosition(showPosition);
//            } 
//             else {
//                x.innerHTML = "Geolocation is not supported by this browser.";
//
//            }
//        }
//        function showPosition(position) {
//            x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
//             var lat = position.coords.latitude;
//            var long = position.coords.longitude;
//            console.log('Your latitude is :'+lat+' and longitude is '+long)
//            alert("Latitude:"+lat+"<br>Longitude:" + long );
//                document.getElementById("lat").value=lat;
//                document.getElementById("long").value=long;
//            alert(document.getElementById("lat").value );
//            alert( document.getElementById("long").value);
//        }
//       getLocation();
//        
//                     
//                      });
    
//     $(document).ready(function(){
//         var x = document.getElementById("demo");
//    GetCurrentGPSLocation gps = new GetCurrentGPSLocation(getActivity());
//
//            // check if GPS enabled
//            if (gps.canGetLocation()) {
//                double latitude = gps.getLatitude();
//                double longitude = gps.getLongitude();
//                // \n is for new line
//                lat.setText( ""+latitude);
//                longi.setText("" +longitude);
//                latitude12=lat.getText().toString();
//                longitude12=longi.getText().toString();
//                Toast.makeText(getActivity(), "Your Location is - \nLat: " + latitude + "\nLong: " + longitude, Toast.LENGTH_LONG).show();
//
//                longi.setVisibility(View.INVISIBLE);
//                lat.setVisibility(View.INVISIBLE);
//            } else {
//                // can't get location
//                // GPS or Network is not enabled
//                // Ask user to enable GPS/network in settings
//                gps.showSettingsAlert();
//            }
//     });
//    
    
    
//    $(document).ready(function() {
//    if (navigator.geolocation)
//    {
//        navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
//    }
//    else 
//    {
//        alert('It seems like Geolocation, which is required for this page, is not enabled in your browser.');
//    }       
//});
//
//function successFunction(position) 
//{
//    var lat = position.coords.latitude;
//    var long = position.coords.longitude;
//    alert('Your latitude is :'+lat+' and longitude is '+long);
//}
//
//function errorFunction(position) 
//{
//    alert('Error!');
//}
//    
//   let button = document.getElementById("get-location");
//let latText = document.getElementById("latitude");
//let longText = document.getElementById("longitude");
//
//button.addEventListener("click", function() {
//  navigator.geolocation.getCurrentPosition(function(position) {
//    let lat = position.coords.latitude;
//    let long = position.coords.longitude;
//
//    latText.innerText = lat.toFixed(2);
//    longText.innerText = long.toFixed(2);
//  });
//}); 
//   
        
        
        
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError,{enableHighAccuracy: true, maximumAge: 10000});
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}
</script>
  
<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="tel"  maxlength="10" id="ph" name="phone[]" placeholder="Phone Number"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-top:3%;">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
     /** $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      }); **/ 
 });  
</script>


 