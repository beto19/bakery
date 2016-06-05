<?php
include('sistema.php');
date_default_timezone_set("Mexico/General");
//require('lib/nusoap/lib/nusoap.php');
$parameters=array('CityName'=>'Mexico','CountryName'=>'Mexico');
try{
	$c =new nusoap_client('http://www.webservicex.net/globalweather.asmx?WSDL','wsdl');
	$result=$c->call('GetWeather',$parameters);
}
catch(Exception $ex)
{
	echo "failed";
}
//print_r($result);
//echo "<br/>";
$xml=$result['GetWeatherResult'];
$xml=utf8_encode($xml);
$xml=str_replace('utf-16','utf-8',$xml);
//echo $result['GetWeatherResult'];
$CurrentWeather = new SimpleXMLElement($xml);
//echo $CurrentWeather->Temperature;
$temperatura=(string)$CurrentWeather->Temperature;
/*
print_r($temperatura);
echo "<br/>";
*/
$query="insert into temperatura (temperatura) values ('$temperatura')";
//echo "<br/>";
//echo $query;
$web->query("insert into temperatura (temperatura) values ('$temperatura')");

?>