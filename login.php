<?php include('header.php'); ?>
<div class="wrapper">
    <section class="form login">
        <header>
            Realtime Chat App
        </header>
        <form action="#">
            <div class="error-txt">This is an error message!</div>
            <div class="field input">
                <label for="Email">Email</label>
                <input type="email" placeholder="Enter email">
            </div>
            <div class="field input">
                <label for="Password">Password</label>
                <input type="password" placeholder="Enter new password">
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
<?php include('footer.php'); ?>
