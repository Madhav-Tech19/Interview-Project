<?php      
    include('connection.php');  
    $emailid = $_POST['mail'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $emailid = stripcslashes($emailid);  
        $password = stripcslashes($password);  
        $emailid = mysqli_real_escape_string($con, $emailid);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from users where email = '$emailid' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            session_start();
            $_SESSION['email']= $emailid;
            $_SESSION['pass']= $password;
            if(isset($_SESSION['email'])) 
            header("location:home.php");
        }
        else {
        echo "Wrong Username or Password";
        }      
?>