<?php

$image=$_FILES["image"]["name"];
$title=$_POST["title"];
$text=$_POST["text"];
$text2=$_POST["text2"];
$id=$_GET["row"];
$imageurl="images/".$image;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

$link=mysqli_connect("localhost","root","","logindb");
$result=mysqli_query($link,"UPDATE `data` SET `title`='$title',`text`='$text',`text2`='$text2',`imageURL`='$imageurl' WHERE `row` = '$id'");
mysqli_close($link);
if($result===true){
    echo("ذخیره  شد");
}else{
    echo("ذخیره  نشد");
}

?>

<?php

?>