<?php
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
} 
// Создаем базу данных testdb3
$sql = "CREATE DATABASE db1";

$conn = new mysqli("localhost", "root", "", "db1");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "CREATE TABLE URLS (id INTEGER AUTO_INCREMENT PRIMARY KEY, long_url VARCHAR(30), short_url VARCHAR(30));";
if($conn->query($sql)){
    echo "Таблица Users успешно создана";
} else{
    echo "Ошибка: " . $conn->error;
}

mysqli_close($conn);
?>