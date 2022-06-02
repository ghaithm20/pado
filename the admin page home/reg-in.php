<?php
//conter
session_start();

    include("con-db.php");
    $check_if_login=0;
    $b2=(isset($_SESSION["email"])&&isset($_SESSION["pass"]));
    if($b2){
        $email=$_SESSION["email"];
        $pass=$_SESSION["pass"];
        $sql = "SELECT * from  user where email='$email' and passowrd='$pass'";
        $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                if($row = mysqli_fetch_assoc($result)) {
                    $check_if_login=1;
                    $_SESSION["email"]=$email;
                    $_SESSION["pass"]=$pass;     
                } 
            }
    }
    if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["password"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $pass=$_POST["password"];
        if(strlen($name)>3 && strlen($pass)>3){
            $sql = "SELECT * from  user where email='$email'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo ("there is is same emai here go to have login ");
            }
            else{

                $sql = "INSERT INTO `user` ( `first`, `email`, `passowrd`) 
                VALUES ( '$name', '$email', '$pass');";

                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                    $check_if_login=1;
                    $_SESSION["email"]=$email;
                    $_SESSION["pass"]=$pass; 
                }else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
            mysqli_close($conn);
        }
        else{
            echo("pleas data not have 3 char ");    
        }
    }
    else{
        echo("pleas enter all data");
    }
?>

<?php 
include 'register.php';
    if($check_if_login){
        header("Location: login.php");
        die();
    } 

?>