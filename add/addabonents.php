

<?php
// абоненты--------------------------------------------------------------------------------------
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$name3 = $_POST['name3'];
$gen = $_POST['gen'];
$age = $_POST['age'];
$id_category= $_POST['id_category'];
//--------------------------------------------------------------------------------------




require_once "../config.php"; //подключение конфига с данными доступа к БД
$connect = mysqli_connect($host, $user, $pass, $db);//соединение с БД
if (!$connect) { //если нет соединения
  echo false; //возращаем клиенту false
  die(); //убиваем скрипт
}
//если соединение произошло успешно

$resultabonents = mysqli_query($connect,"INSERT INTO `abonents`(`surname`,`name`,`patronymic`,`gender`,`age`,`id_category` ) VALUES ('$name1','$name2','$name3','$gen','$age','$id_category')");

echo "все отправилось "
?>


