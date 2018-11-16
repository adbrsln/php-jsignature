<?php 
$svg = $_POST['hiddenSigData'];
$svg = str_replace('image/svg+xml,', '', $svg);
echo $svg;
$id = 2;
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/uploads/$id.svg","wb");
fwrite($fp,$svg);
fclose($fp);

?>