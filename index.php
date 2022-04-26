<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Realtime Chat App | Sign Up</title>
    <link rel="icon" type="image/png" href="/">
    <link rel="stylesheet" href="dist/css/bundle.css">
</head>
<body>
<div class="wrapper">
    <section class="form signup">
        <header>
            Realtime Chat App
        </header>
        <form action="#">
            <div class="error-txt">This is an error message!</div>
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

<script src="dist/js/bundle.js"></script>
</body>
</html>
