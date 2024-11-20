<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>

        <link rel="stylesheet" href="formstyle.css">
    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    

}

.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 21px 40px;
  background-color: #fff;
  color: #ff1f1f;
  weight:100%;
}

    h3 {
        margin:45px;
        font-size:25px;

    }

    table {
            background: #fff;
            
        }
table td {
            max-width: 100%;
        }
        @media (max-width: 750px) {
            table {
                font-size:15px;
    }
        h3 {
        font-size:23px;

    }

}

        @media (max-width: 630px) {
            table {
            font-size:14px;
            }
                    h3 {
        font-size:22px;

    }

        @media (max-width: 550px) {
            table {
            font-size:13px;}
                        h3 {
                font-size:21px;
            }}

              @media (max-width: 500px) {
            td {
            
            font-size:12px;}
            h3 {
                font-size:20px;
            }
            th {
                font-size:12px;
            }
              }



        </style>
</head>
<body>
 <nav class="navbar">


    <ul class="nav-links">


      <input type="checkbox" id="checkbox_toggle" />
      <label for="checkbox_toggle" class="hamburger">&#9776;</label>

  
      <div class="menu">

        <li><a href="../index.php" >Главная</a></li>
        <li><a href="../news/newsportal.php">Новости</a></li>
        <li><a href="../form/feedback.php" style="color:#787878;">Обратная связь</a></li>
      </div>
    </ul>
  </nav>
<center>
<div class="ig">
<?php
$servername = "localhost";
$username = "ck22962_submit";
$password = "r28VHSUz"; 
$dbname = "ck22962_submit"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}


$sql = "SELECT id, name, phone, address, email FROM feed";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Телефон</th>
                <th>Адрес</th>
                <th>Email</th>
            </tr>";

    
    while($row = $result->fetch_assoc()) {
        echo "<h3>Таблица всех пользователей</h3>";
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["address"] . "</td>
                <td>" . $row["email"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Нет данных";
}

?>
</div>
</center>
</body>
</html>
