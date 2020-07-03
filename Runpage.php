<?php
$host="127.0.0.1 ";
$user="root";
$password="";
$database= "nouf";

$connect= mysqli_connect('127.0.0.1','root' , '', 'nouf');
$stmt = $connect ->prepare("select * from Robot_Controller");
   if(mysqli_connect_errno()) {
   die("cannot connect database".mysqli_connect_errno());
  }
  else {
 
 $stmt = mysqli_prepare($connect,"PHP");
 
 if (isset ($_post['stop']))
 {
	 while ($row = $result ->fetch_assoc() ){
		 echo "$row [stop]";
	}
    }
    if(isset($_POST['Right'])) {
      while ($row=$result->fetch_assoc()) {

      echo "$row[R]";
       }
       }
       if(isset($_POST['Left'])) {
        while ($row = $result->fetch_assoc()) { 

        echo "$row[L]";
         }
         }
         if(isset($_POST['Forwords'])) {
          while ($row = $result->fetch_assoc()) {
          echo "$row[Stright]";
         }
         }
           if(isset($_POST['Backwords'])) {
           while ($row=$result->fetch_assoc()) {

            echo "$row[Back]";
		   }
             }
}
?>
 
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <button type="button" name="button" Onclick=Go()>Back to home</button>
  </body>
  <script type="text/javascript">
    function Go(){
      window.history.back();
	  }
 </script>
 </html>