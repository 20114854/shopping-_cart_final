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
    }elseif(!empty($username) || !empty($password)){
    //check if the password provided matches what we have in the database
    $sql = "SELECT * FROM tbluser WHERE StudName ='$username'";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);

            if($user_data['SPassword'] == $password)
            {
                header("Location:../index.php?success=Loggedin");
            }
        }
    }
    }

}

?>