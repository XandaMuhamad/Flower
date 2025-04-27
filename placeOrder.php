<?php
include_once 'conectO.php';
include_once 'chekout.html';
if(isset($_POST['submit']))
{    
     $Fname = $_POST['f-name'];
     $Lname = $_POST['l-name'];
     $city = $_POST['city'];
     $street = $_POST['street'];
     $apartment = $_POST['apartment'];
     $date = $_POST['date'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $note = $_POST['note'];
    
     
     $sql = "INSERT INTO orders(First_Name, Last_Name, Town_City, Street_Adress, Apartment, Date1, Phone, Email, Order_Note)
     VALUES ('$Fname','$Lname','$city','$street','$apartment','$date','$phone','$email','$note')";
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