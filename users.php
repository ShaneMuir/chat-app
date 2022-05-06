<?php include('header.php'); ?>
<div class="wrapper">
    <section class="users">
        <header>
            <div class="content">
                <img src="https://via.placeholder.com/50" alt="">
                <div class="details">
                    <span>Shane Muir</span>
                    <p>Active Now</p>
                </div>
            </div>
            <a href="#" class="logout">Logout</a>
        </header>
        <div class="search">
            <span class="text">Select an user to start chat</span>
            <input type="text" placeholder="Enter name to search...">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="users-list">

        </div>
    </section>
</div>
<script src="dist/js/users.js"></script>
<?php include('footer.php'); ?>
