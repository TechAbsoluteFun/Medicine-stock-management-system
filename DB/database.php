<?php
$connect=mysqli_connect('localhost','root','','stock');

if(mysqli_connect_errno($connect))
{
    echo 'failed to connect';
}

?>		