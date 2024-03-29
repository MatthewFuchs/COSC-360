<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyDiscussionForum</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                
                <?php if (isset($_GET['message'])): ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars($_GET['message']); ?>
                    </div>
                <?php endif; ?>

                <!-- Login Form Start -->
                <div class="card">
                    <div class="card-header">
                        <h3>Login to Your Account</h3>
                    </div>
                    <div class="card-body">
                        <form id="loginForm" action="login_process.php" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required placeholder="Enter your username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="form-group">
                                <a href="forgot_password.html">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        Don't have an account? <a href="register.html">Sign up now</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <footer class="footer mt-5">
        <div class="container text-center">
            <span>&copy; 2024 MyDiscussionForum. All rights reserved.</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
