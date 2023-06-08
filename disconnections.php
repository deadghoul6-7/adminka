<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Отключения</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="section menu">
                <h3>Меню</h3>
                <ul>
                    <li><a href="abonents.php">Абоненты</a></li>
                    <li><a href="ats.php">АТС</a></li>
                    <li><a href="categories.php">Категории</a></li>
                    <li><a href="disconnections.php">Отключения</a></li>
                    <li><a href="long_distance_negotiations.php">Межгород</a></li>
                    <li><a href="payments.php">Плата</a></li>
                    <li><a href="phones.php">Телефоны</a></li>
                </ul>
            </div>
            <div class="section" id="sotrudnic">
            <h3>Отключения</h3>
                        <form action="/tel/add/adddisconnections.php" method = "POST" class="inputs">
                           
                            <p class="ccc">Номера телефонов
                            <select name="id_phone_disconnections" id="id_phone_disconnections">
                                <?php
                            require_once('config.php');

                            $connect = mysqli_connect($host, $user, $pass, $db);
                            if(!$connect){
                                die();
                            }
                            mysqli_query($connect, "SET CHARSET UTF8;");
                            $result = mysqli_query($connect, "SELECT * FROM `phones`");
                            while($row = mysqli_fetch_array($result)){
                                echo "

                                
                                <option>$row[id_phone] -$row[number] 
                                    
                                    
                                ";
                            }
                        ?>
                                </select>  </p>
                                </input>  
                            <input type="date" name="date_disconnections" id="date_disconnections" placeholder="Введите дату">
                            <input type="text" name="reason" id="reason" placeholder="Введите причину отключения">                                                     
                            <input type="submit" class="btn btn-add" value="Добавить">
                        </form>              
                <table class="table">
                    <thead>
                        <tr>
                            <th>id телефона</th>
                            <th>Дата отключения</th>
                            <th>Причиа отключения</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                            require_once('config.php');

                            $connect = mysqli_connect($host, $user, $pass, $db);
                            if(!$connect){
                                die();
                            }
                            mysqli_query($connect, "SET CHARSET UTF8;");
                            $result = mysqli_query($connect, "SELECT * FROM `disconnections`");
                            while($row = mysqli_fetch_array($result)){
                                echo "

                                <tr>
                                    <td>$row[id_phone]</td>
                                    <td>$row[date]</td>
                                    <td>$row[reason]</td>              
                                    <td> <input type='submit' class='btn btn-del' value='Удалить'></td>
                                    
                                </tr>";
                            }
                        ?>
                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>