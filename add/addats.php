<?php

$name_ats = $_POST['name_ats'];
$location_ats = $_POST['location_ats'];
$id_phone_ats = $_POST['id_phone_ats'];





require_once "../config.php"; //подключение конфига с данными доступа к БД
$connect = mysqli_connect($host, $user, $pass, $db);//соединение с БД
if (!$connect) { //если нет соединения
  echo false; //возращаем клиенту false
  die(); //убиваем скрипт
}
//если соединение произошло успешно

$resultabonents = mysqli_query($connect,"INSERT INTO `ats`(`name_ats`,`location_ats`,`id_phone`) VALUES ('$name_ats','$location_ats','$id_phone_ats')");

echo "все отправилось "
?>
