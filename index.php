<?php
$servername = "localhost"; 
$username = "ck22962_new"; 
$password = "3qABrTWy"; 
$dbname = "ck22962_new"; 

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT id, title, text, date FROM news12 LIMIT 3"; 
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
 <nav class="navbar">
    <ul class="nav-links">

      <input type="checkbox" id="checkbox_toggle" />
      <label for="checkbox_toggle" class="hamburger">&#9776;</label>

      <div class="menu">

        <li><a href="../index.php" style="color:#787878;">Главная</a></li>
        <li><a href="../newspor/newsportal.php">Новости</a></li>
        <li><a href="../form/feedback.php">Обратная связь</a></li>
      </div>
    </ul>
  </nav>

    <h1>Последние новости</h1>

    <div id="text-container">

    <?php
    if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $title = $row['title'];
        $content = $row['text'];
        $date = $row['date'];

        $sentences = preg_split('/(?<=[.!?])\s+/', $content, -1, PREG_SPLIT_NO_EMPTY);


        $short_text = (strlen($content) > 100) ? substr($content, 0, 148) . "..." : $content;


        echo "<div class='text-part'>";

        echo "<h2>" . htmlspecialchars($title) . "</h2>";

        echo "<p style='color:#353535;'><strong>Текст:</strong> " . nl2br(htmlspecialchars($short_text)) . "</p>";
        echo "<p style='color:#787878;'><strong>Дата публикации:</strong> " . htmlspecialchars($date) . "</p>";
        echo "</div>";

    }
} else {
    echo "Нет данных";
}
 
    ?>
  </div>

    <div class="news"><a href="../news/newsportal.php">Все новости</a></div>

    <div class="feedback"><a href="../form/feedback.php">Обратная связь</a></div>
  
</body>
</html>

