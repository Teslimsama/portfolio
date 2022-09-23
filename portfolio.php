<?php
 include_once 'database.php';
 include 'alert.message.php' ;

 
if (isset($_POST['submit'])) {
    
    $message = $_POST['message'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    date_default_timezone_set('Africa/lagos');
    $Date_time = date('m/d/Y h:i:s a',time());
    $sql = "INSERT INTO portfolio (name ,email, message , date) VALUES(?,?,?,?);";
  
    $stmt = mysqli_prepare($db_connect, $sql);
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt,'ssss',$name,$email,$message,$Date_time);
      if(mysqli_stmt_execute($stmt)){
          header("location: index#contact") ;
        //   echo "no";
          $_SESSION['success'] = "Message sent Successfully";
    }else{
        header("location: index#contact");
        $_SESSION['error'] = "Message sent successfully failed"; 
        
      }
    
  }
  else {
    echo 'didnt work asshole';
  }