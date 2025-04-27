<?php
            include "connection.php";
            
        ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css"></link>
    <link rel="stylesheet" href="./assets/css/stylee.css"></link> 
       
  </head>
</head>
<body >
<h1 id ="title"> List of all Messages</h1p>         

<div id="main-content" class="container allContent-section py-4">
                    
      
  <?php
$username = "root"; 
$password = ""; 
$database = "flora"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM contacts";


echo '<table  class ="border" border="0" cellspacing="0" cellpadding="2"> 
      <tr class="head"> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Message</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $name = $row["name"];
        $email= $row["email"];
        $message = $row["message"];
        

        echo '<tr> 
                  <td>'.$id.'</td> 
                  <td>'.$name.'</td> 
                  <td>'.$email.'</td> 
                  <td>'.$message.'</td> 
                 
              </tr>';
    }
    $result->free();
} 
?> 
        
    </div>
      
    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 
</html>