<?php

$id=$_GET["row"];

$link=mysqli_connect("localhost","root","","logindb");
$result=mysqli_query($link,"DELETE FROM `data` WHERE `row`=$id");
mysqli_close($link);
if($result===true){
    echo("حذف  شد");
}else{
    echo("حذف  نشد");
}

?>

<?php

?>