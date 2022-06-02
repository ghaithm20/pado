<?php
//conter
    include("con-db.php");
    if(isset($_POST["first"])&&isset($_POST["email"])&&isset($_POST["pass"])
    &&isset($_POST["last"])&&isset($_POST["user"])&&isset($_POST["age"])&&isset($_POST["addr"])
    &&isset($_POST["phone"])&&isset($_POST["female"])){
        $first=$_POST["first"];
        $email=$_POST["email"];
        $pass=$_POST["pass"];
        $last=$_POST["last"];
        $user=$_POST["user"];
        $age=$_POST["age"];
        $addr=$_POST["addr"];
        $phone=$_POST["phone"];
        $gen=$_POST["female"];
            $sql = "SELECT * from  user where Email='$email'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                
                echo "<script
                type='text/jscript'>alert('Wrong Email!!.')</script>";
            }
            else{

                $sql = "INSERT INTO `user`(`UserName`, `Email`, `Password`, `FirstName`, `LastName`, `Age`, `ID_GEN`, `Number`, `Address`, `Type`) 
                VALUES ('$user','$email','$pass','$first','$last','$age','$gen','$phone','$addr','2')";

                if (mysqli_query($conn, $sql)) {
                    echo '<script>alert("New doctor added successfully")</script>';
                }else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
            mysqli_close($conn);
    }
    else{
        echo("pleas enter all data");
    }
?>