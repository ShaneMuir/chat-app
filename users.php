<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])) {
    header('location: login.php');
}

include_once('header.php');

?>
<div class="wrapper">
    <section class="users">
        <header>
            <div class="content">
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if(mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <img src="https://raw.githubusercontent.com/ShaneMuir/chat-app/main/php/images/<?php echo $row['img']; ?>" alt="">
                <div class="details">
                    <span><?php echo ucfirst($row['fname']). " " . ucfirst($row['lname']) ?></span>
                    <p><?php echo $row['status']; ?></p>
                </div>
            </div>
            <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
        </header>
        <div class="search">
            <span class="text">Select a user to start chat</span>
            <input type="text" placeholder="Enter name to search...">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="users-list">

        </div>
    </section>
</div>
<script src="dist/js/users.js"></script>
<?php include_once('footer.php'); ?>
