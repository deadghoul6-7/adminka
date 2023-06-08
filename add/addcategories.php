<?php

$category_name = $_POST['category_name'];
$discounts = $_POST['discounts'];






require_once "../config.php"; //подключение конфига с данными доступа к БД
$connect = mysqli_connect($host, $user, $pass, $db);//соединение с БД
if (!$connect) { //если нет соединения
  echo false; //возращаем клиенту false
  die(); //убиваем скрипт
}
//если соединение произошло успешно

$resultabonents = mysqli_query($connect,"INSERT INTO `categories`(`category_name`,`discounts`) VALUES ('$category_name','$discounts')");

echo "все отправилось "
?>
