<?php
   $startURL=$_REQUEST[URL];

    $short=substr(md5($startURL.mt_rand()),0,8);
    $short_url="https://example.io/$short";



$conn = new mysqli("localhost", "root", "", "db1");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "INSERT INTO URLS (long_url, short_url) VALUES 
            ('$startURL', '$short_url')";

if($conn->query($sql)){
    echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}


$conn->close();

?>

<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">

  </head>
  <body>

    <h1> Сокращенная ссылка:</h1>
    <a href="<?php echo $startURL; ?>"><?php echo $short_url?></a>

  </body>
</html>