<!DOCTYPE html>
<html>
    <head><title>Navigation Bar</title>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1 ">
        
        
<!--        bootstrap file-->
            <link rel="stylesheet" href="css/bootstrap.min.css" >
        
        
<!--        javascript file-->
                <script src="bootstrap/jquery.js"></script>
                <script src="js/bootstrap.min.js"></script>
        
        
<!--        external css-->
            <link rel="stylesheet" type="text/css" href="custom.css">

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
    </head>
    <style>
        
* {
	box-sizing: border-box;
}
body {
	font-family: 'Montserrat', sans-serif;
	line-height: 1.6;
	margin: 0;
	min-height: 100vh;
}
ul {
  margin: 0;
  padding: 0;
  list-style: none;
}


h2,
h3,
a {
	color: #34495e;
}

a {
	text-decoration: none;
}



.logo {
	margin: 0;
	font-size: 1.45em;
}

.main-nav {
	margin-top: 5px;

}
.logo a,
.main-nav a {
	padding: 10px 15px;
	text-transform: uppercase;
	text-align: center;
	display: block;
}

.main-nav a {
	color: #34495e;
	font-size: .99em;
}

.main-nav a:hover {
	color: #718daa;
}



.header {
	padding-top: .5em;
	padding-bottom: .5em;
	border: 1px solid #a2a2a2;
	background-color: #f4f4f4;
	-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}


/* ================================= 
  Media Queries
==================================== */




@media (min-width: 769px) {
	.header,
	.main-nav {
		display: flex;
	}
	.header {
		flex-direction: column;
		align-items: center;
    	.header{
		width: 80%;
		margin: 0 auto;
		max-width: 1150px;
	}
	}

}

@media (min-width: 1025px) {
	.header {
		flex-direction: row;
		justify-content: space-between;
	}

}

    </style>
    <body>
        	<header class="header">
		<h1 class="logo"><a href="#">Flexbox</a></h1>
      <ul class="main-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Registration</a></li>
          <li><a href="#">shcedule</a></li>
      </ul>
	</header>
    </body>
</html>