<?php
$link = mysql_connect('localhost', 'naveen', 'naveen@123');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('vijaywebservice');
//mysql_close($link);

?>