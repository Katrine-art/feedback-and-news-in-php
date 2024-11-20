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

body {
            margin: 0;
            height: 100vh; 
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            font-family: Arial, sans-serif;

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
.container1 {
    max-width: 500px;
    width: 100%;
    background-color: #fff;
    margin: 20px auto;
    padding: 30px;

}

.container1 .title {
    padding-bottom:20px;
}

.container1 .title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 25px;
    text-align: center;
}

.container1 .form {
    width: 100%;
}

.container1 .form .input_field {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}

.container1 .form .input_field label {
    width: 200px;
    margin-right: 10px;
    font-size: 16px;
}

.container1 .form .input_field .input {
    width: 100%;
    outline: none;
    border: 1px solid #787878;
    font-size: 15px;
    padding: 8px 10px;
    border-radius: 3px;

}

.container1 .form .input_field .input:focus {
    border: 1px solid #ff1f1f;
}

.container1 .form .input_field .btn {
    width: 100%;
    padding: 8px 10px;
    font-size: 15px;
    border: 0;
    background: #ff1f1f;
    color: white;
    cursor: pointer;
    border-radius: 3px;
    outline: none;
}

.container1 .form .input_field:last-child {
    margin-bottom: 0;
}


.container1 .form .input_field .btn:hover {
    background: #787878;
}

textarea {
  resize: none; 
}



@media (max-width: 420px) {
    .container1 .form .input_field, .ig{
        flex-direction: column;
        align-items: flex-start;
    }

    .container1 .form .input_field label {
        margin-bottom: 5px;
    }
}</style>
</head>
<body>
 <nav class="navbar">


    <ul class="nav-links">


      <input type="checkbox" id="checkbox_toggle" />
      <label for="checkbox_toggle" class="hamburger">&#9776;</label>

  
      <div class="menu">

        <li><a href="../index.php" >Главная</a></li>
        <li><a href="../newspor/newsportal.php">Новости</a></li>
        <li><a href="../form/feedback.php" style="color:#787878;">Обратная связь</a></li>
      </div>
    </ul>
  </nav>  
    <div class="container1">

    
    <form action="submit.php" method="POST">
    <div class="title">Форма обратной связи</div>
    <div class="form">
    <div class="input_field">
        <label for="name">Имя:</label>
        <input type="text" class="input" id="name" name="name" required pattern="^[А-Яа-яЁё]+$" maxlength="20">
    </div>
    <div class="input_field">
        <label for="phone">Номер телефона:</label>
        <input type="text" id="phone" class="input" name="phone" required placeholder="+7 (___) ___-__-__" maxlength="18">
    </div>
    <div class="input_field">
        <label for="address">Адрес:</label>
        <textarea id="address" name="address" class="input" autocomplete="street-address" maxlength="40" pattern="^[а-яА-ЯёЁ0-9., ]+$"></textarea>
    </div>
    <div class="input_field">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"  class="input" required>
    </div>
    <div class="input_field">
        <input type="submit" class="btn" value="Отправить">
    </div>
    </div>
    </form>
    </div>

    <script>
  document.getElementById('phone').addEventListener('input', function(e) {
    var input = e.target.value;
    input = input.replace(/\D/g, '');

    if (input.length > 11) input = input.slice(0, 11); 

    var formatted = "+7 ";
    if (input.length > 1) formatted += "(" + input.slice(1, 4);
    if (input.length > 4) formatted += ") " + input.slice(4, 7);
    if (input.length > 7) formatted += "-" + input.slice(7, 9);
    if (input.length > 9) formatted += "-" + input.slice(9, 11);

    e.target.value = formatted;
  });
  
</script>
</body>
</html>
