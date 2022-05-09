<?php include_once('header.php'); ?>
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

<?php include_once('footer.php'); ?>