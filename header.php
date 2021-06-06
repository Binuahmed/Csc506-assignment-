
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Student Record System</title>
		<style type="text/css">
		body {
  background-color: azure;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: blue;
}

.topnav2 {
  overflow: hidden;
  background-color: aqua;
  text-align:center;
  color:#333;
  font-family: Arial, Helvetica, sans-serif;
}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.myform { 
background-color:#333;
border-radius:5px;
width:35%;
margin-left:31%;
margin-top:2%;
color:#4CAF50;
padding:10px;
}

input[type=text] {
width:60%;
padding:7px 10px;
border: 1px solid #ccc;
border-radius: 4px;
}
input[type=submit]{
width:60%;
background-color:#4CAF50;
color: white;
font-size:18px;
padding: 9px 15px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
font-family: Georgia, "Times New Roman", Times, serif;
}
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 24px;
	color: #FFFFFF;
}

h2 {
 background: blue;
 display: block;
 padding: 0.5% 6%;
 font-weight : bold;
 font-size: 20px;
 color: white;
 text-decoration: none;
 text-align: center;
 }

h3 {
 background: green;
 display: block;
 padding: 0.5% 13%;
 font-weight : bold;
 font-size: 20px;
 font-family:serif;
 color: white;
 text-decoration: bold;
 text-align: center;
 }
 
 h5 {
 background: red;
 display: block;
 padding: 0.5% 6%;
 font-weight : bold;
 font-size: 25px;
 color: white;
 text-decoration: none;
 text-align: center;
 }

		</style>
	
	</head>
		
	<h2><center><marquee behaviour="alternate">Student Record System</center></marquee></h2>
								        <div class="topnav">
	<center>	
 
    <   <a class="active" a href='index.php'>LOGIN HERE</a>
	 <a href='register.php'>NEW REGISTRATION</a>
	
</center>
					
	
</div>	
		
	
	</head>



<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

      <a class="navbar-brand" href="index.php">Student Record System</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <?php 

      if(isset($_SESSION['username'], $_SESSION['password'])) {

    ?>

    
     

          </div>
         
        
        <div class="welcome">
		<button> Student Record System - Student Dashboard</button><?php echo "Welcome, <a href='profile.php'>".$_SESSION['username']."</a>!";?></div>

        <a href="logout.php">Log Out <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>

      </form>

      <?php 

        } else {
          echo "<span class='not-logged'>Not logged in.</span>";
        }

      ?>

      


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




	
