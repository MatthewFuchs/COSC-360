<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post - MyDiscussionForum</title>
    <link rel="stylesheet" href="styles/style.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Create a New Post</h2>
      
        <form action="post_submission.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="postTitle">Post Title</label>
                <input type="text" class="form-control" id="postTitle" name="postTitle" required>
            </div>
            <div class="form-group">
                <label for="postCategory">Category</label>
                <select class="form-control" id="postCategory" name="postCategory">
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                    <option value="category3">Category 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="postContent">Content</label>
                <textarea class="form-control" id="postContent" name="postContent" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="postImage">Image (optional)</label>
                <input type="file" class="form-control-file" id="postImage" name="postImage" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Submit Post</button>
        </form>
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
