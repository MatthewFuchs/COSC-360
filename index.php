<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Home Page</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <header>
        <h1>Dog Sitting !</h1>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search...">
            <button onclick="window.location.href='search.php'">Search</button>
        </div>
        <nav>
            <ul>
                <li><a href="createPost.php">Create Post</a></li>
                <li><a href="admin.php">Admin</a></li>

                <li><a href="login.html" id="loginLink">Login</a></li>

                <li><a href="register.php" id="signupLink">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <section class="main-content">
        <h2>Welcome to the Forum!</h2>
        <p>Join the community and start engaging in discussions.</p>
    
        <div class="categories">
            <h3>Forum Categories</h3>
            <ul>
                <li><a href="search.php?category=1">Category 1</a></li>
                <li><a href="search.php?category=2">Category 2</a></li>
                <li><a href="search.php?category=3">Category 3</a></li>
            </ul>
        </div>
    
        <div class="featured-threads">
            <h3>Featured Threads</h3>
            <ul>
                <li><a href="post.php?id=1">Featured Thread 1</a></li>
                <li><a href="post.php?id=2">Featured Thread 2</a></li>
                <li><a href="post.php?id=3">Featured Thread 3</a></li>
            </ul>
        </div>
    
        <div class="latest-discussions">
            <h3>Latest Discussions</h3>
            <ul>
                <li><a href="post.php?id=4">Discussion Topic 1</a></li>
                <li><a href="post.php?id=5">Discussion Topic 2</a></li>
                <li><a href="post.php?id=6">Discussion Topic 3</a></li>
            </ul>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-links">
            <a href="#">Terms of Service</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Help Center</a>
        </div>
        <div class="copyright">
            <p>&copy; 2024 My Forum. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>
