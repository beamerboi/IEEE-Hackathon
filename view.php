<?php
include("config.php");
$sql = "SELECT name from images where id=1";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "upload/".$image;

?>
Member of month:
<img src='<?php echo $image_src;  ?>' >