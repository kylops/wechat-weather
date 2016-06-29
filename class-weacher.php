<?php

class weatherReport{

   public $api_key = '5686073f76f047a6a941ac2a948feb00';

   public $api_address = 'https://api.heweather.com/x3/weather?';

   public function weatherReport($city){

      $ch = curl_init();
      $url = $api_addresscity.'city='.$city.'&'.'key='.$api_key;
      // http request
      curl_setopt($ch , CURLOPT_URL , $url);
      curl_setopt($ch , CURLOPT_SSL_VERIFYPEER , false);
      $res = curl_exec($ch);

      $wa = json_decode( $res, true );
      curl_close($ch);

   }

}

?>
/weather?cityid=CN101010100&key='.$apikey;
