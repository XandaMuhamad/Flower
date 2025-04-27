<?php
include_once 'connection.php';
include_once 'Contact.html';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];
     
     $sql = "INSERT INTO contacts (name,email,message)
     VALUES ('$name','$email','$message')";
     if (mysqli_query($conn, $sql)) {
      echo '<script language="javascript">';
      echo 'alert("message successfully sent")';
      echo '</script>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>