<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Межгород</title>
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
            <h3>Телефоны</h3>
                        <form action="/tel/add/addphones.php" method = "POST" class="inputs">
                           
                            <p class="ccc">id абонентов
                            <select name="id_abonent_phones" id="id_abonent_phones">
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
                                <option>$row[id_abonent]- $row[surname]
                                    
                                    
                                </tr>";
                            }
                        ?>
                                </select> </p>
                            </input>                   
                            <input type="number" name="number" id="number" placeholder="Введите номер телефона">   
                            <input type="number" name="indexx" id="indexx" placeholder="Введите индекс">                           
                            <input type="text" name="district" id="district" placeholder="Введите район">
                            <input type="text" name="street" id="street" placeholder="Введите улицу">                           
                            <input type="number" name="house" id="house" placeholder="Введите дом">   
                            <input type="number" name="apartment" id="apartment" placeholder="Введите квартиру">                           
                            <input type="text" name="city" id="city" placeholder="Введите город">                                                                                
                            <input type="submit" class="btn btn-add" value="Добавить">
                        </form>              
                <table class="table">
                    <thead>
                        <tr>
                            <th>id абонента</th>
                            <th>номер телефона</th>
                            <th>индекс</th>
                            <th>район</th>
                            <th>улицу</th>
                            <th>дом</th>
                            <th>квартиру</th>
                            <th>город</th>
                           
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
                            $result = mysqli_query($connect, "SELECT * FROM `phones`");
                            while($row = mysqli_fetch_array($result)){
                                echo "

                                <tr>
                                    <td>$row[id_abonent]</td>
                                    <td>$row[number]</td>
                                    <td>$row[indexx]</td>   
                                    <td>$row[district]</td>
                                    <td>$row[street]</td>
                                    <td>$row[house]</td>   
                                    <td>$row[apartment]</td>
                                    <td>$row[city]</td>                                      
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