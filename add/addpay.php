<?php

$id_abonent_pay = $_POST['id_abonent_pay'];
$date_pay = $_POST['date_pay'];
$amount_pay = $_POST['amount_pay'];





require_once "../config.php"; //подключение конфига с данными доступа к БД
$connect = mysqli_connect($host, $user, $pass, $db);//соединение с БД
if (!$connect) { //если нет соединения
  echo false; //возращаем клиенту false
  die(); //убиваем скрипт
}
//если соединение произошло успешно

$resultabonents = mysqli_query($connect,"INSERT INTO `payments`(`id_abonent`,`date`,`amount`) VALUES ('$id_abonent_pay','$date_pay','$amount_pay')");

echo "все отправилось "
?>
