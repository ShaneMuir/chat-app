<?php
session_start();
if(isset($_SESSION['unique_id'])) {
    header('location: users.php');
}
include_once('header.php');
?>
<div class="wrapper">
    <section class="form login">
        <header>
            Realtime Chat App
        </header>
        <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="field input">
                <label for="Email">Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="field input">
                <label for="Password">Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
                <i class="fas fa-eye"></i>
            </div>

            <div class="field button">
                <input type="submit" value="Continue to Chat">
            </div>
        </form>
        <div class="link">Not yet signed up? <a href="/">Signup Now</a></div>
    </section>
</div>
<script src="dist/js/pass-show-hide.js"></script>
<script src="dist/js/login.js"></script>
<?php include_once('footer.php'); ?>
