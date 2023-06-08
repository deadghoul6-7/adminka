<?php

$id_phone_disconnections = $_POST['id_phone_disconnections'];
$date_disconnections = $_POST['date_disconnections'];
$reason = $_POST['reason'];






require_once "../config.php"; //подключение конфига с данными доступа к БД
$connect = mysqli_connect($host, $user, $pass, $db);//соединение с БД
if (!$connect) { //если нет соединения
  echo false; //возращаем клиенту false
  die(); //убиваем скрипт
}
//если соединение произошло успешно

$resultabonents = mysqli_query($connect,"INSERT INTO `disconnections`(`id_phone`,`date`,`reason`) VALUES ('$id_phone_disconnections','$date_disconnections','$reason')");

echo "все отправилось "
?>
