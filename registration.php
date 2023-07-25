<! Doctype html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <title> User Registration Form </title>
  <link rel = "stylesheet" type = "text/css" href = "regstyle.css"> 
</head>  
<body>  
<h1> User Registration Form</h1>  
<form name="f2" method="post" enctype="multipart/form-data" action =?#? onsubmit = "return validation2()">  
<table>  
  <tr>  
    <td width="159"> <b> Enter your Name </b> </td>  
    <td width="218">  
    <input type="text" placeholder="Enter name" name = "name" > </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Email </b> </td>  
    <td> <input type="email" name="email" placeholder= "Enter Email" > </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Password </b> </td>  
    <td> <input type="password" name="password" placeholder=" Enter Password" > </td>  
  </tr>  
  <tr>  
    <td colspan="2" align="center">  
    <input type ="submit" name="save" value="Register"/> 
    </td>  
  </tr>  
</table>  
</form> 
    <script>  
            function validation2()  
            {  
                var na=document.f2.name.value;  
                var em=document.f2.email.value;
                var ps=document.f2.password.value;
                if(na.length=="" && em.length=="" && ps.length=="") {  
                    alert("All fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(na.length=="") {  
                        alert("User name is empty");  
                        return false;  
                    }   
                    if(em.length=="") {  
                        alert("Email Id is empty");  
                        return false;
                    }
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
    </script>
</body>  
</html>  
<?php
    if(isset($_POST["save"])){
        $conn = mysqli_connect("localhost", "root", "", "users");
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $name =  $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
         
        $sql = "INSERT INTO users(username,email,password) VALUES ('$name','$email','$password')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>User successfully Registered.</h3>";
            echo'<h3>kindly <a href="index.html">login</a> to visit our page.</h3>';
 
        } else{
            echo "ERROR: Please check your registration details". $sql. "<br>"
                . mysqli_error($conn);
        }
    }
?>
