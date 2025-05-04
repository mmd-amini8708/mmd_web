<?php
    session_start();
    $User = $_POST["username"];
    $Password = $_POST["password"];

    echo($User);
    $data_sa = mysqli_connect("localhost","root","","logindb");
    $FIND = mysqli_query($data_sa,"SELECT  `name`, `password`,`Admin` FROM `user` WHERE `name` = '$User' AND `password` = '$Password'");
    $data = mysqli_fetch_array($FIND);

    if($data)
    {
        if($data['password'] == $Password)
        {
            $_SESSION['login'] = true;
            $_SESSION['User'] = $User;
            if($data['Admin'] == 1)
            {
                $_SESSION['Admin'] = true;
            }
            else
            {
                $_SESSION['Admin'] = false;
            }
            
            echo("Your logged");
            echo($_SESSION['User']);
        }

        ?>
        <script>
            location.replace('index.php')
        </script>
        <?php
    }

?>

