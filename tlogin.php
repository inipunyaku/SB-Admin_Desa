<?php
    session_start();
    Include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $get_user = "SELECT * FROM admin WHERE username = '$username'";
    $result = mysqli_query($koneksi,$get_user);
    $data = mysqli_fetch_array($result);
    if($data){
        if($password == $data['password']){
            //set session
            Header("Location: dashboard.php");
            $_SESSION['login'] = true;
        }else{
            Header("Location: login.php");
        }
    }else{
        Header("Location: login.php");
    }
?>