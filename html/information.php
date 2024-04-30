<?php 
$link = mysqli_connect('db', 'root', 'rtt532mm');
if (!$link){
	die('Error' . mysql_error());
}
echo 'Good!';
mysqli_close($link);
?>
