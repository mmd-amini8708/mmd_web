<?php

$id=$_GET["row"];

$link=mysqli_connect("localhost","root","","logindb");
$url=mysqli_query($link,"SELECT  `imageURL` FROM `data` WHERE `row`=$id");
$row=mysqli_fetch_array($url);
unlink($row['imageURL']);

$result=mysqli_query($link,"DELETE FROM `data` WHERE `row`=$id");

mysqli_close($link);
if($result===true){
    echo("حذف  شد");
}else{
    echo("حذف  نشد");
}

?>
<script>
    location.replace('index.php');
</script>
<?php

?>