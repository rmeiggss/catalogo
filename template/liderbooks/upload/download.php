<?php ob_start();?>
<?php
$filename = $_REQUEST['file'];
$fullname = "tmp/".$filename;
header ("Content-Type: application/force-download");
header ("Content-Disposition: attachment; filename=".$filename);
?>
<?php ob_end_flush();?>
<?php
readfile($filename);
?>