<html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="newstyle.css"> 
    <style>
    .newsp {    background-color: #fff;
width:91.5%;
    padding: 15px;
    margin-left: 50px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);}

.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 5px 0;
  background-color: #fff;
  color: #ff1f1f;
    padding-right:100px;

}

.menu li {
  gap: 5px;

}


    h1 {
        color:#ff1f1f;
        margin:40px 0px;
    }

            @media (max-width: 1000px) {

            .newsp {
                width:87%;
            }

        }

            @media (max-width: 768px) {
            .container1 {
                font-size: 15px;
            }
            .newsp {
                width:80%;
            }

        }

                    @media (max-width: 650px) {

            .newsp {
                width:79%;
            }
                                @media (max-width: 550px) {

            .newsp {
                width:74%;
            }

        @media (max-width: 480px) {
            .container1 {
                font-size: 14px;
            }

                        .newsp {
                width:71%;
            }

        }

             @media (max-width: 370px) {

            .newsp {
                width:67%;
                margin-left:40px;
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
        <li><a href="../news/newsportal.php" style="color:#787878;">Новости</a></li>
        <li><a href="../form/feedback.php">Обратная связь</a></li>
      </div>
    </ul>
  </nav>
  
    <div class="container1">
    <div class="newsp">
    <h1>Новости</h1>
    <?php 
include_once "connect.php";




$stmt = $pdo->query("SELECT id, title, text, date FROM news12");


if ($stmt->rowCount() > 0) {

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
        echo "<p style='color:#353535;'>" ."". nl2br(htmlspecialchars($row['text'])) . "</p>";
        echo "<small style='color:#787878;'>Дата публикации: " . $row['date'] . "</small>."."<hr>"."<br>";
    }
} else {

    echo "Новостей нет.";
}
?>
</div>
</div>

</body>


