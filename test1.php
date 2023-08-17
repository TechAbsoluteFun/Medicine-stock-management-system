<?php
$date1='$_POST['date']';
$date2='$_POST['expire_date']';


$diff = abs(strtotime($date2)-strtotime($date1));


 $years=floor($diff/(360*60*60*24));
 echo $years;
//$days = floor($diff-$years)

<?