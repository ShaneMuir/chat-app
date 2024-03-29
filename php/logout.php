<?php

    session_start();
    if(isset($_SESSION['unique_id'])) {
        include_once 'config.php';
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)) {
            $status = "Offline now";
            $time_now = time();
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}', last_active = '{$time_now}' WHERE unique_id = '{$logout_id}'");
            if($sql) {
                session_unset();
                session_destroy();
                header('location: ../login.php');
            }
            if(!$sql) {
                echo("Error description: " . mysqli_error($conn));
            }
        } else {
            header('location: ../users/php');
        }
    } else {
        header('location: ../login.php');
    }