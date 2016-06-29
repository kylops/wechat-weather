<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
   <meta name="description" content="HTML5">
   <meta name="author" content="SitePoint">
   <title></title>
   <link rel="stylesheet" href=""> <!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
</head>
<body>

   <form class="" action="index.php" method="post">
      <label>Please Enter A City Name</label>
      <input type="text" name="city">
      <label>Submit</label>
      <input type="submit" name="submit">
      <?php if(empty($_POST));?>
         <p>Please input a city name.</p>
      <?php else; ?>
      <?php echo ok; ?>
      <?php endif; ?>
      <div class="row">
         <div class="col-lg-12">
            <?php echo $res ?>

         </div>

      </div>
   </form>
   <?php

      $city = $_POST["city"];
      $ch = curl_init();
      $url = 'https://api.heweather.com/x3/weather?city='.$city.'&key=5686073f76f047a6a941ac2a948feb00';
      // 执行HTTP请求
      curl_setopt($ch , CURLOPT_URL , $url);
      curl_setopt($ch , CURLOPT_SSL_VERIFYPEER , false);
      $res = curl_exec($ch);

      $wa = json_decode( $res, true );
      curl_close($ch);
   ?>
</body>
</html>
