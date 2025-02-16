<?php
    $EMAIL = $_POST["email"];
    $PASSWORD = $_POST["password"];
    $UserName = $_POST["username"];

    echo($EMAIL);

    $data_sa = mysqli_connect("localhost","root","","logindb");

    mysqli_query($data_sa, "INSERT INTO `user`(`name`, `password`, `email`) VALUES ('$UserName','$PASSWORD','$EMAIL')");
    mysqli_close($data_sa);
    header("Location: login.html");
    exit();

?>