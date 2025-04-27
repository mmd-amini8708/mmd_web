<?php include("head.html") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>setting</title>
</head>
<body>
    <?php
        
    ?>

    <form action="edit_p.PHP?row=<?php echo($_GET['row']) ?>" method="post" enctype="multipart/form-data" class="row m-2">
        <input type="file" class="col-12 col-md card m-1" 
        name="image">

        <input type="text" class="col-12 col-md card m-1" 
        name="title" placeholder="title">

        <input type="text" class="col-12 col-md card m-1" 
        name="text" placeholder="text">
        <input type="text" class="col-12 col-md card m-1" 
        name="text2" placeholder="second text">

        <input type="submit" class="col-12 col-md card m-1" 
        value="saves">
    </form>


</body>
</html>

<?php include("foot.html") ?>