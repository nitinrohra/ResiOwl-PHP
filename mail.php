<?php
$id=$_POST['text_id'];
$nam=$_POST['text_name'];
$message=$_POST['text_msg'];
$headers='From '. $id;
mail('contact@resiowl.com','Contact Mail',$message,$headers);
echo $headers;
?>