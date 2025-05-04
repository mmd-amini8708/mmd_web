<?php

$image=$_FILES["image"]["name"];
$title=$_POST["title"];
$text=$_POST["text"];
$text2=$_POST["text2"];

$imageurl="images/".$image;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

$link=mysqli_connect("localhost","root","","logindb");
$result=mysqli_query($link,"INSERT INTO `data`(`title`, `text`, `text2`, `imageURL`)
 VALUES ('$title','$text','$text2','$imageurl')");
mysqli_close($link);
if($result===true){
    echo("ذخیره  شد");
}else{
    echo("ذخیره  نشد");
}


?>
<script>
    location.replace('index.php');
</script>
<?php

?>