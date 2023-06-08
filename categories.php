<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Категории</title>
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
            <h3>Категории</h3>              
                        <form action="/tel/add/addcategories.php" method = "POST" class="inputs">
                            <input type="text" name="category_name" id="category_name" placeholder="Введите название категории">
                            <input type="number" name="discounts" id="discounts" placeholder="Введите скидку">
                            <input type="submit" class="btn btn-add" value="Добавить">
                        </form> 
                <table class="table">
                    <thead>
                        <tr>
                            <th>Название категории</th>
                            <th>Скидка</th>
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
                            $result = mysqli_query($connect, "SELECT * FROM `categories`");
                            while($row = mysqli_fetch_array($result)){
                                echo "

                                <tr>
                                    <td>$row[category_name]</td>
                                    <td>$row[discounts]</td>                                                 
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