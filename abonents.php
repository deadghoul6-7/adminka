<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Абоненты</title>
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
            <h3>Абоненты</h3>
                
              
                        <form action="/tel/add/addabonents.php" method = "POST" class="inputs">
                            <input type="text" name="name1" id="name1" placeholder="Введите Фамилию">
                            <input type="text" name="name2" id="name2" placeholder="Введите Имя">
                            <input type="text" name="name3" id="name3" placeholder="Введите Отчество">
                            
                            <p class="ccc">пол 1- это мужчина , 2 - это женшина
                            <select name="gen" id="gen">                                                 
                                <option> 1 
                                <option> 2                                      
                                </select> </p>
                            </input>
                            <input type="number" name="age" id="age" placeholder="Введите возраст">
                            
                            <p class="ccc">id льгот
                            <select name="id_category" id="id_category">
                                <?php
                            require_once('config.php');

                            $connect = mysqli_connect($host, $user, $pass, $db);
                            if(!$connect){
                                die();
                            }
                            mysqli_query($connect, "SET CHARSET UTF8;");
                            $result = mysqli_query($connect, "SELECT * FROM `categories`");
                            while($row = mysqli_fetch_array($result)){
                                echo "

                                <tr>
                                <option>$row[id_category] -  $row[category_name]
                                    
                                    
                                </tr>";
                            }
                        ?>
                                </select> </p>
                            </input>    
                           

                            <input type="submit" class="btn btn-add" value="Добавить">
                        </form>
               
                    
               


                <?php
          
            ?>

                
                <table class="table">
                    <thead>
                        <tr>
                            <th>Фамилия</th>
                            <th>Имя</th>
                            <th>Отчество</th>
                            <th>Пол</th>
                            <th>Возраст</th>
                            <th>категории льготников</th>
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
                            $result = mysqli_query($connect, "SELECT * FROM `abonents`");
                            while($row = mysqli_fetch_array($result)){
                                echo "

                                <tr>
                                    <td>$row[surname]</td>
                                    <td>$row[name]</td>
                                    <td>$row[patronymic]</td>
                                    <td>$row[gender]</td>
                                    <td>$row[age]</td>
                                    <td>$row[id_category]</td>
                                    
                                    <td> <input type='submit' class='btn btn-del' value='Удалить'></td>
                                    
                                </tr>";
                            }
                        ?>
                        <?php
                                // require_once('config.php');

                                // $connect = mysqli_connect($host, $user, $pass, $db);
                                // if(!$connect){
                                //     die();
                                // }
                                
                                // $mysqli = new mysqli("localhost", "root", "", "tests");
                                // $mysqli->real_query("SELECT `name` FROM `workers` WHERE id > 0;");
                                // if ($mysqli->field_count) {
                                //     $result = $mysqli->store_result();
                                //     while ($row = $result->fetch_row()) {
                                //         foreach ($row as $key => $value) {
                                //             echo "<td>" . $value . "</td>";
                                //         }
                                //     }
                                //     $result->close();
                                //     $mysqli->close();
                                // }
                                
                                // for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                                // print_r($data);
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>