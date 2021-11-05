<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Chat</title>

  <link rel="stylesheet" href="./css/app.css"/>
</head>
<body>
    <div class="app">
      <header>
        <h1>Сообщения</h1>
        <input type="text" name="username" id="username" placeholder="Введите имя... "/>
      </header>

      <div id="message"></div>

      <form id="message_form">
        <input type="text" name="message" id="message_input" placeholder="Введите тест сообщения..."/>
        <button type="submit" id="message_send">Отправить</button>
      </form>
    </div>

    <script type="./js/app.js"></script>
</body>
</html>
