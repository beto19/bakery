<?php
$de='USD';
$a='MXN';
$url='http://finance.yahoo.com/d/quotes.csv?f=l1d1t1&s='.$de.$a.'=X';
$handle=fopen($url,'r');
if ($handle) 
{
	$r=fgetcsv($handle);
	fclose($handle);
	print_r($r);
	echo "<br/>";
}
echo '1'.$de.'='.$r[0].' '.$a.'<br>';
//∫echo 'Informaci&oacute;n al d¬iacute;a:'.$r[1].' '.$r[2];
?>