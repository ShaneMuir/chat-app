<?php
include('header.php');
?>
<div class="wrapper">
    <section class="form signup">
        <header>
            Realtime Chat App
        </header>
        <form action="#">
            <div class="error-text">This is an error message!</div>
            <div class="name-details">
                <div class="field input">
                    <label for="First Name">First Name</label>
                    <input type="text" placeholder="First Name">
                </div>
                <div class="field input">
                    <label for="Last Name">Last Name</label>
                    <input type="text" placeholder="Last Name">
                </div>
            </div>
            <div class="field input">
                <label for="Email">Email</label>
                <input type="email" placeholder="Enter email">
            </div>
            <div class="field input">
                <label for="Password">Password</label>
                <input type="password" placeholder="Enter new password">
                <i class="fas fa-eye"></i>
            </div>
            <div class="field image">
                <label for="Image">Select Image</label>
                <input type="file">
            </div>
            <div class="field button">
                <input type="submit" value="Continue to Chat">
            </div>
        </form>
        <div class="link">Already signed up? <a href="/login.php">Login Now</a></div>
    </section>
</div>
<script src="dist/js/pass-show-hide.js"></script>
<?php include('footer.php'); ?>
