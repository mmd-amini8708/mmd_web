<?php include("head.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>setting</title>
</head>
<body>
    <?php
        if(isset($_SESSION['login']))
        {
            if($_SESSION['login'] == true)
            {
                ?>
                    <div class="container-fluid">
                    <a class="navbar-brand" href="add_option.php">add an item +</a>
                    
                    </div>
                <?php
            }
        }

        
        $link=mysqli_connect("localhost","root","","logindb");
        $result=mysqli_query($link,"SELECT * FROM `data`");
        mysqli_close($link);
        $row=mysqli_fetch_array($result);

        while($row){
        ?>

            <div class="container-fluid">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo($row['imageURL'])?>" class="card-img-top" alt="مکمل 1">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($row['title'])?></h5>
                        <p class="card-text"><?php echo($row['text'])?></p>
                        <p class="card-text"><strong><?php echo($row['text2'])?></strong></p>
                        <?php

                            if(isset($_SESSION['login']))
                            {
                                if($_SESSION['login'] == true)
                                {
                                    ?>
                                        <a href="edit.php?row=<?php echo($row['row'])?>" class="btn btn-primary">Edit</a>
                                        <a href="remove.php?row=<?php echo($row['row'])?>" class="btn btn-primary">Remove</a>
                                    <?php
                                }
                            }

                        ?>
                        
                    </div>
                </div>
                
            </div>
            </div>

        
        <?php
        $row=mysqli_fetch_array($result);
        }
    ?>
        
    

</body>
</html>

<?php include("foot.html") ?>