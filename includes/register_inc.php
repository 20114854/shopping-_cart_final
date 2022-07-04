<?php

if (isset($_POST['submit'])) {
   //echo "Clicked";

   //Connect to database
    require "conn.php";

    $usernumber = $_POST['StudNum'];
    $username = $_POST['StudName'];
    $password = $_POST['SPassword'];
    $confirm_password = $_POST['SConfirmPassword'];
    $useremail = $_POST['Semail'];

    //Error handles
    if (empty($username) || empty($password) || empty($confirm_password || empty($usernumber) || empty($useremail))) {
       header("Location:../register.php?error=emptyfields&username=".$username);
       exit();
                // insert data into the database
            }elseif(!empty($username) || !empty($password) || !empty($confirm_password || !empty($usernumber) || !empty($useremail))) {
                $sql = " INSERT INTO tbluser (StudName, SPassword, SConfirmPassword, StudNum, Semail) values ('$username','$password','$confirm_password','$usernumber','$useremail')";
                mysqli_query($conn, $sql);

                header("Location:../login.php?succes=registered");
               
            }
        
        
    
}

?>