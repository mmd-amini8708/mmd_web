<?php
    $User = $_POST["username"];
    $Password = $_POST["password"];


    $data_sa = mysqli_connect("localhost","root","","logindb");
    $FIND = mysqli_connect($data_sa,"SELECT  `name`, `password` FROM `user` WHERE `name` = '$User' AND `password` = '$Password'");
    $data = mysqli_fetch_array($FIND);

    if($data)
    {
        $Query = "SELECT `name` FROM `user` "
        echo("Your logged");
    }

?>