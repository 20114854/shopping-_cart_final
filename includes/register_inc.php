<?php

if (isset($_POST['submit'])) {
   //echo "Clicked";

   //Connect to database
    require "conn.php";

    $username = $_POST['StudName'];
    $password = $_POST['SPassword'];
    $confirm_password = $_POST['SConfirmPassword'];

    //Error handles
    if (empty($username) || empty($password) || empty($confirm_password)) {
       header("Location:../register.php?error=emptyfields&username=".$username);
       exit();

       //check for invalid fields
       
    }elseif (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        header("Location:../register.php?error=invalidfields&username".$username);
        exit();
        //check if the password match
    }elseif ($password !== $confirm_password) {
        header("Location:../register.php?error=passworddonotmatch&username".$usename);
        exit();   
        //check if the username i taken or not
    }else {
        $sql = "SELECT StudName FROM tbluser WHERE StudName = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
           header("Location:../register.php?error=sqlerror");
           exit();
        }else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);
            if ($rowCount > 0) {
                header("Location:../register.php?error=usernametaken&username".$username);
                exit();
                // insert data into the database
            }else {
                $sql = " INSERT INTO tbluser (StudName, SPassword) values (?,?)";
                $stmt = mysqli_stmt_init($conn);
               if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location:../register.php?error=sqlerror");
                exit();
                //create a hashed password
               }else {
                   $hashedPass = password_hash($password, PASSWORD_DEFAULT);
                   mysqli_stmt_bind_param($stmt, "ss" , $username, $hashedPass);
                   mysqli_stmt_execute($stmt);
                    header("Location:../login.php?succes=registered");
               }
            }
        }

    }
    
}

?>