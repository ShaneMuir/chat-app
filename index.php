<?php
    session_start();
    if(isset($_SESSION['unique_id'])) {
        header('location: users.php');
    }

    include_once('header.php');
?>
<div class="wrapper">
    <section class="form signup">
        <header>
            Realtime Chat App
        </header>
        <form action="#" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="name-details">
                <div class="field input">
                    <label for="First Name">First Name</label>
                    <input type="text" name="fname" placeholder="First Name" required>
                </div>
                <div class="field input">
                    <label for="Last Name">Last Name</label>
                    <input type="text" name="lname" placeholder="Last Name" required>
                </div>
            </div>
            <div class="field input">
                <label for="Email">Email</label>
                <input type="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="field input">
                <label for="Password">Password</label>
                <input type="password" name="password" placeholder="Enter new password" required>
                <i class="fas fa-eye"></i>
            </div>
            <div class="field image">
                <label for="Image">Select Image</label>
                <input type="file" name="image" required>
            </div>
            <div class="field button">
                <input type="submit" value="Continue to Chat">
            </div>
        </form>
        <div class="link">Already signed up? <a href="/login.php">Login Now</a></div>
    </section>
</div>
<script src="dist/js/pass-show-hide.js"></script>
<script src="dist/js/signup.js"></script>
<?php include_once('footer.php'); ?>
