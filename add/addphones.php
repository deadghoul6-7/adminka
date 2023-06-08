<?php

$id_abonent_phones = $_POST['id_abonent_phones'];
$number = $_POST['number'];
$indexx = $_POST['indexx'];
$district = $_POST['district'];
$street = $_POST['street'];
$house = $_POST['house'];
$apartment = $_POST['apartment'];
$city = $_POST['city'];



require_once "../config.php"; //подключение конфига с данными доступа к БД
$connect = mysqli_connect($host, $user, $pass, $db);//соединение с БД
if (!$connect) { //если нет соединения
  echo false; //возращаем клиенту false
  die(); //убиваем скрипт
}
//если соединение произошло успешно

$resultabonents = mysqli_query($connect,"INSERT INTO `phones`(`id_abonent`,`number`,`indexx`,`district`,`street`,`house`,`apartment`,`city`) VALUES ('$id_abonent_phones',
'$number',
'$indexx',
'$district',
'$street',
'$house',
'$apartment',
'$city')");

echo "все отправилось "
?>
 