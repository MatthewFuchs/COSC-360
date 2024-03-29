<?php
require 'search_process.php'; //connects to db

$searchResults = [];
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['query'])) {
    $searchResults = performSearch($_GET['query']); //handles search
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search - MyDiscussionForum</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        
        <form class="search-form" action="search_process.php" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search for discussions, posts, or users" name="query" required>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </div>
        </form>

        <section class="search-results">
            <h2>Search Results</h2>
            <div class="list-group">
                
                <a href="#" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">Result Title</h5>
                    <p class="mb-1">Summary of the search result...</p>
                    <small>More details like date or author.</small>
                </a>
                
            </div>
        </section>
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
