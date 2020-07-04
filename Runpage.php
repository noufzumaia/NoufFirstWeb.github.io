<?php


// Create connection

$Connection = new mysqli("localhost", "root","","Nouf");
$stmt = $Connection->prepare("select * from Robot_Controller");
if($Connection-> connect_error){

  die("error connection". $mysqli->connect_error);
}else{
  $stmt-> execute();
   $result = $stmt->get_result();
//  while ($row=$result->fetch_assoc()) {
 if(isset($_POST['Stright'])) {
   while ($row=$result->fetch_assoc()) {

   echo "$row[Stright]";


    }

    }
     if(isset($_POST['Backk'])) {
      while ($row=$result->fetch_assoc()) {

      echo "$row[Backk]";

       }

       }
       if(isset($_POST['RRight'])) {
        while ($row=$result->fetch_assoc()) {

        echo "$row[RRight]";


         }

         }
         if(isset($_POST['LLeft'])) {
          while ($row=$result->fetch_assoc()) {

          echo "$row[LLeft]";


           }

           }
           if(isset($_POST['Stop'])) {
            while ($row=$result->fetch_assoc()) {

            echo "$row[Stop]";


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
    <br><br><br>
    <button type="button" name="button" Onclick=Go()>Back to home</button>
  </body>
  <script type="text/javascript">
    function Go(){
      window.history.back();

    }
  </script>
</html>