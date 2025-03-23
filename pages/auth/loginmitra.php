<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mydonate</title>
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Login Mitra</h2>
            <form action="#">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-input-email" placeholder="Enter your email" required>
                
                <div class="password-container">
                    <label for="password" class="form-label">Password <a href="#" class="forgot">Forgot?</a></label>
                    <input type="password" id="password" name="password" class="form-input-password" placeholder="Enter your password" required>
                    <span class="toggle-password">👁️</span>
                </div>

                <button type="submit" class="login-btn">Login</button>
            </form>
            <p class="signup-text">Don't Have An Account? <a href="#">Sign Up</a></p>
        </div>
    </div>
</body>
</html>