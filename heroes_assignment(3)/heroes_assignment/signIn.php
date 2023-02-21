<?php

if (isset($_POST['signIn'])){

    include "../db_conn.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    $user_data = 'email='.$email. '&password='.$password;

    if (empty($email)) {
        header("Location:../index1.php?error=email is required&user_data");
    }else if(empty($password)) {
        header("Location: ../index1.php?error=Password is requested&user_data");
    }else {
        $sql = "INSERT INTO userprofiles(userName, Password) 
               VALUES('$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) { 
            echo "success";
        }else {
            header("Location:../index1.php?error=unknown error occurred&user_data");
        }
    }  

}