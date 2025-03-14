<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>
<body>
    <!-- Login Container -->
    <div class="login-container">
        <!-- Logo overlapping the login form -->
        <div class="logo">
            <img src="<?php echo e(asset('images/1.png')); ?>" alt="Logo" style="width: 60px; height: 60px; border-radius: 50%;">
        </div>

        <h1>Login</h1>
        
        <form id="loginForm" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="input-box">
                <input id="username" type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input id="password" type="password" name="password" placeholder="Password" required>
            </div>
    
            <div class="remember-forgot">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <a href="#">Forgot Password?</a>
            </div>
    
            <button type="submit" class="btn">Login</button>
    
            <div class="register-link">
                <p>Don't have an account? <a href="<?php echo e(route('register')); ?>">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Users\dissa\Desktop\Railway_project\resources\views/index.blade.php ENDPATH**/ ?>