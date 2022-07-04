<?php

function check_login($conn)
{
    if(isset($_SESSION['StudNum']))
    {
        $id = $_SESSION['StudNum'];
        $query = "SELECT * FROM tbluser WHERE StudNum = '$id' limit 1";

        $result = mysqli_query($conn, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location:login.php");
    die;
}