<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Realtime Chat App | Chat</title>
    <link rel="icon" type="image/png" href="/">
    <link rel="stylesheet" href="dist/css/bundle.css">
</head>
<body>
<div class="wrapper">
    <section class="chat-area">
        <header>
            <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
            <img src="https://via.placeholder.com/50" alt="">
            <div class="details">
                <span>Shane Muir</span>
                <p>Active Now</p>
            </div>
        </header>
        <div class="chat-box">

        </div>
        <form action="#" class="typing-area">
            <input type="text" class="incoming_id" name="incoming_id" value="#" hidden>
            <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
            <button><i class="fab fa-telegram-plane"></i></button>
        </form>
    </section>
</div>

<script src="dist/js/bundle.js"></script>
</body>
</html>
