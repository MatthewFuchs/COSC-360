<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - MyDiscussionForum</title>
    <link rel="stylesheet" href="styles/style.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Admin Dashboard</h1>
     
        <nav class="nav nav-pills flex-column flex-sm-row">
            <a class="flex-sm-fill text-sm-center nav-link active" href="#user-management" aria-controls="user-management" data-toggle="tab">User Management</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="#post-moderation" aria-controls="post-moderation" data-toggle="tab">Post Moderation</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="#site-analytics" aria-controls="site-analytics" data-toggle="tab">Site Analytics</a>
        </nav>

       
        <div class="tab-content mt-3">
      
            <div class="tab-pane fade show active" id="user-management">
                <h2>User Management</h2>
               
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search users" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                
            </div>

            <!-- Post Moderation -->
            <div class="tab-pane fade" id="post-moderation">
                <h2>Post Moderation</h2>
                
            </div>

            <!-- Site Analytics -->
            <div class="tab-pane fade" id="site-analytics">
                <h2>Site Analytics</h2>
               
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
