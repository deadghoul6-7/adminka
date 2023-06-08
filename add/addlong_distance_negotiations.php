<?php

$id_phone_long_distance_negotiations = $_POST['id_phone_long_distance_negotiations'];
$date_long_distance_negotiations = $_POST['date_long_distance_negotiations'];
$time_start = $_POST['time_start'];
$time_end = $_POST['time_end'];





require_once "../config.php"; //подключение конфига с данными доступа к БД
$connect = mysqli_connect($host, $user, $pass, $db);//соединение с БД
if (!$connect) { //если нет соединения
  echo false; //возращаем клиенту false
  die(); //убиваем скрипт
}
//если соединение произошло успешно

$resultabonents = mysqli_query($connect,"INSERT INTO `long_distance_negotiations`(`id_phone`,`date`,`time_start`,`time_end`) VALUES ('$id_phone_long_distance_negotiations','$date_long_distance_negotiations','$time_start','$time_end')");

echo "все отправилось "
?>
