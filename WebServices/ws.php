<?php
/**
 * Created by PhpStorm.
 * User: nicolas.aube95
 * Date: 14/11/2017
 * Time: 11:10
 */

$url='api.openweathermap.org/data/2.5/weather?q=Marbella&units=metric&lang=fr&cnt=3&APPID=8bd7647506def76f3dc1c121e52cc34d';

$ch=curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$body = curl_exec($ch);
//var_dump($body);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

$data = json_decode($body);
//var_dump($data);


$ville = $data->name;
echo "<h1>Ville : $ville</h1>";

$date = $data->dt;
$date_convertie = date('d/m/Y',$date);
echo "<h1>Date : $date_convertie</h1>";


$temperature = $data->main->temp;
echo "<h1>Température : $temperature °C</h1>";
//$countryName = $data->RestResponse->result->name;

/*

foreach($messages as $message){
    echo "<p>$message</p>";
}
echo "<h1>$countryName</h1>";

*/

/*
 *
 * string(445) "{"coord":{"lon":-4.89,"lat":36.52},"weather":[{"id":801,"main":"Clouds","description":"peu nuageux","icon":"02d"}],"base":"stations","main":{"temp":18.61,"pressure":1018,"humidity":34,"temp_min":18,"temp_max":19},"visibility":10000,"wind":{"speed":1.95,"deg":99.0003},"clouds":{"all":20},"dt":1510659000,"sys":{"type":1,"id":5489,"message":0.0022,"country":"ES","sunrise":1510642597,"sunset":1510679469},"id":2514169,"name":"Marbella","cod":200}"
object(stdClass)#2 (12) {
  ["coord"]=>
  object(stdClass)#1 (2) {
    ["lon"]=>
    float(-4.89)
    ["lat"]=>
    float(36.52)
  }
  ["weather"]=>
  array(1) {
    [0]=>
    object(stdClass)#3 (4) {
      ["id"]=>
      int(801)
      ["main"]=>
      string(6) "Clouds"
      ["description"]=>
      string(11) "peu nuageux"
      ["icon"]=>
      string(3) "02d"
    }
  }
  ["base"]=>
  string(8) "stations"
  ["main"]=>
  object(stdClass)#4 (5) {
    ["temp"]=>
    float(18.61)
    ["pressure"]=>
    int(1018)
    ["humidity"]=>
    int(34)
    ["temp_min"]=>
    int(18)
    ["temp_max"]=>
    int(19)
  }
  ["visibility"]=>
  int(10000)
  ["wind"]=>
  object(stdClass)#5 (2) {
    ["speed"]=>
    float(1.95)
    ["deg"]=>
    float(99.0003)
  }
  ["clouds"]=>
  object(stdClass)#6 (1) {
    ["all"]=>
    int(20)
  }
  ["dt"]=>
  int(1510659000)
  ["sys"]=>
  object(stdClass)#7 (6) {
    ["type"]=>
    int(1)
    ["id"]=>
    int(5489)
    ["message"]=>
    float(0.0022)
    ["country"]=>
    string(2) "ES"
    ["sunrise"]=>
    int(1510642597)
    ["sunset"]=>
    int(1510679469)
  }
  ["id"]=>
  int(2514169)
  ["name"]=>
  string(8) "Marbella"
  ["cod"]=>
  int(200)
}

 */