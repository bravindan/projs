<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <php
        $servername="localhost";
        $username="root";
        $password="";

        $name=$email=$phone=$gender=$pwd=$cpwd="";
        $nameErr=$emailErr =$genderErr = $pwdErr =$cpwdErr ="";
        
        $conn=new mysqli_connect($servername,$username,$password);

        
        if(!$conn->connect_error){
            die("connection failed" .$conn->connect_error());
        }
        echo "connected successfully";

        
        if (empty($_POST["name"])){
            $nameErr ="This field can't be empty";
        }
        else{
            $name =$_POST["name"];
        }
        if(empty($_POST["email"])){
            $nameErr="Enter a valid email";
        }
        else{
            $name=$_POST["name"];
        }
        ?>
    </body>
</html>