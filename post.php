<?php
require 'database_connection.php';
session_start();

//post ids 
$postId = isset($_GET['id']) ? (int) $_GET['id'] : 0;

//posts
$stmt = $db->prepare("SELECT p.*, u.username AS author FROM posts p JOIN users u ON p.user_id = u.id WHERE p.id = ?");
$stmt->execute([$postId]);
$post = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$post) {
    echo "Post not found.";
    exit;
}

//coments
$commentsStmt = $db->prepare("SELECT c.*, u.username AS commenter FROM comments c JOIN users u ON c.user_id = u.id WHERE post_id = ? ORDER BY c.created_at ASC");
$commentsStmt->execute([$postId]);
$comments = $commentsStmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($post['title']) ?> - MyDiscussionForum</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
      
        <div class="post-header">
            <h2><?= htmlspecialchars($post['title']) ?></h2>
            <p>Posted by <span class="post-author"><?= htmlspecialchars($post['author']) ?></span> on <span class="post-date"><?= $post['created_at'] ?></span></p>
        </div>

        <!-- Post -->
        <div class="post-content">
            <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
        </div>

        <!-- Comments  -->
        <div class="comments-section mt-5">
            <h3>Comments</h3>
            <?php foreach ($comments as $comment): ?>
            <div class="comment">
                <p class="comment-author"><?= htmlspecialchars($comment['commenter']) ?></p>
                <p class="comment-date"><?= $comment['created_at'] ?></p>
                <p class="comment-content"><?= nl2br(htmlspecialchars($comment['content'])) ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if (isset($_SESSION['user_id'])): ?>
        
        <div class="comment-form mt-5">
            <h4>Leave a Comment</h4>
            <!-- TODO : comments submissions in submit_comment.php -->
            <form action="submit_comment.php" method="POST">
                <input type="hidden" name="post_id" value="<?= $postId ?>">
                <div class="form-group">
                    <textarea class="form-control" id="comment" name="comment" rows="3" required placeholder="Your comment..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Post Comment</button>
            </form>
        </div>
        <?php endif; ?>
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
