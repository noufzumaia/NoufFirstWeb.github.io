<!DOCTYPE html> 
<html>

 <head>
    <meta charset = "utf-8">
	<meta name = "descripiton" content = " First project is interface of Robot controller ">
   
   <title> First Project Robot Controller </title>
	
	<style>
	    div
		 { 
	height:700px;
	width:1380px;
	background-image: url('robot-pix.jpg');
	background-repeat:no-repeat;
	background-attachment:fexd;
    background-size: 100% 100%;
	}
		
		h1
		 {
		 color:black; 
		 text-align:center;
		 }
		
	   p
    	{
	  color: black; 
	  text-align: center;
		}
		
		h1
		{
		font-family:"Courier New", Courier, monospace;
		font-size:300% ; 
		font-weight: bold;
		line-height: 20px;
		}
		
		p
		{
		font-family:"Courier New", Courier, monospace;
		font-size:150%;
		font-weight: normal;
		line-height: 20px;
		}
		
		
		button 
		{
		font-family:"Courier New", Courier, monospace;
		font-color:white;
		font-size:35px;
		border-radius:20px;
		margin:20px;
		}
		
		#bou1
		{
		position:relative;
		top:70px;
		left:190px;
		}
		
		#bou2
		{
		position:relative;
		top:125px;
		left:0px;
		background-color:red;
		}
		
		#bou3
		{
		position:relative;
		top:180px;
		left:-190px;
		}
		
		#bou4
		{
		display:block;
		position:relative;
		top:40px;
		left:70px;
		}
		
		#bou5
		{
		position:relative;
		top:-40px;
		left:375px;
		}
	</style>
	
 </head>

  <?php
  $conn = new mysqli("localhost", "root", "");
  // Check connection

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Create database
  $sql = "CREATE DATABASE Nouf";
  if ($conn->query($sql) === TRUE) {


  }

  $conn->close();

  $conn1 = new mysqli("localhost", "root", "","Nouf");
  // Check connection
  if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
  }

  // sql to create table
  $sql = "CREATE TABLE Robot_Controller (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Stright VARCHAR(30) ,
  Backk VARCHAR(30) ,
  RRigh VARCHAR(50),
  LLeft VARCHAR(50),
  Stop VARCHAR(50)
  )";



  if ($conn1->query($sql) === TRUE) {

    $sql1= "INSERT INTO Robot_Controller  (Stright,Backk, RRight ,LLeft,Stop)
    VALUES ('Forward','Backward','Right','Left','Stop')";

  }
  ?>
  
  <body>
  <form action = "RunPage.php" method = "post">
  <div> <div>
   <br>
   <h1> ROBOT CONTROLLER </h1>
   <p> First project with <a href = "hhttps://www.s-m.com.sa/" target = "_blank"> <b>'أساليب الذكية' </b>  </a> </p>
  
	<button id='bou1' type="submit"  name="Stright" value="go" >Forwords</button>
	<button id="bou2" type="submit"  name="Stop" value="S">Stop</button>
	<button id="bou3" type="submit"  name="Backk" value="B" >Backwords</button>
	<button id="bou4" type="submit"  name="LLeft" value="L">Left</button>
    <button id="bou5" type="submit"  name="RRight" value="R">Right</button>



	
  </body>

</html>
