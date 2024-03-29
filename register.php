<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - MyDiscussionForum</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php if (isset($_GET['message'])): ?>
    <div class="alert alert-info">
        <?php echo htmlspecialchars($_GET['message']); ?>
    </div>
<?php endif; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                
                <div class="card">
                    <div class="card-header">
                        <h3>Create Your Account</h3>
                        
                    </div>
                    <div class="card-body">
                        <form id="registrationForm" action="register_process.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required placeholder="Choose a username">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required placeholder="Create a password">
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required placeholder="Confirm your password">
                            </div>
                            <div class="form-group">
                                <label for="profilePicture">Profile Picture</label>
                                <input type="file" class="form-control-file" id="profilePicture" name="profilePicture" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        Already have an account? <a href="login.html">Login here</a>
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
    <script src="script.js"></script>
</body>
</html>
