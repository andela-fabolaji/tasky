<?php require('public/views/common/header.php'); ?>
<?php require('public/views/common/nav.php'); ?>

<div class="form-section">
    <div id="signupPanel">
        <div>
            <h1>Signup</h1>
        </div>
        <form action="/signup" method="POST" name="signupForm">
            <div class="form-input">
                <input class="signup-form" id="username" name="username" type="text" placeholder="Enter your name"/>
            </div>
            <div class="form-input">
                <input class="signup-form" id="email" name="email" type="text" placeholder="Email address"/>
            </div>
            <div class="form-input">
                <input class="signup-form" id="password" name="password" type="password" placeholder="Password"/>
            </div>
            <button type="submit">SIGNUP</button>
        </form>
        <h5>Have an account? <a class="login-link" id="loginLink">Login</a></h5>
    </div>
    <div id="loginPanel">
        <div>
            <h1>Login</h1>
        </div>
        <form action="/auth/login" method="POST" name="loginForm">
            <div class="form-input">
                <input class="signup-form" id="userid" name="username" type="text" placeholder="Enter your name"/>
            </div>
            <div class="form-input">
                <input class="signup-form" id="password" name="password" type="password" placeholder="Password"/>
            </div>
            <button type="submit">LOGIN</button>
        </form>
        <h5>New? <a class="signup-link" id="signupLink">Signup</a></h5>
    </div>
</div>

<?php require('public/views/common/footer.php'); ?>
