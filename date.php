<meta charset="utf-8" />
<?php
setlocale(LC_TIME, 'fr');
$var =  strftime('%A, le %d %B %Y');
echo $var;
$datean = strftime('%A, le %d %B %Y', strtotime('+1 year'));
echo $datean;
?>