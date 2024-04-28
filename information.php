<?php 
$link = mysqli_connect('127.0.0.1', 'root', 'rtt532mm');
if (!$link){
	die('Error' . mysql_error());
}
echo 'Good!';
mysqli_close($link);
?>
