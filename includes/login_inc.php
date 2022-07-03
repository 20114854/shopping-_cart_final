<?php

//check if the submit button was clicked or not

if (isset($_POST['submit'])) {
    //echo "Clicked";
//connect to the database

    require "conn.php";
    //collect data from the form

    $username = $_POST ['StudName'];
    $password = $_POST['SPassword'];

    //check if the fields are empty

    if (empty($username) || empty($password)) {
        header("Location:../login.php?error=emptyfields");
        exit();
    }
    //check if the password provided matches what we have in the database
    $sql = "SELECT * FROM tbluser WHERE StudName =?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../login.php?error=sqlerror");
        exit();
    }else {
        mysqli_stmt_bind_param($stmt, "s" , $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
           $passCheck = password_verify($password, $row['SPassword']);
           if ($passCheck == false) {
              header("Location:../login.php?error=wrongpass");
           }elseif ($passCheck == true) {
              session_start();
              $_SESSION['sessionId'] = $row ['StudNum'];
              $_SESSION['sessionUser'] = $row ['StudName'];
              
              header("Location: ../index.php?success=Loggedin");
           }
        }else {
            header("Locaton:../login.php?error=nouser");
        }
    }


}else {
    header("Location:../login.php?error=accessforbbiden");
}

?>