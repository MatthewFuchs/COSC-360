<?php
require 'database_connection.php';
session_start();

// 'post_id' is used to specify the post 
//TODO : adjust for db 
$postId = filter_input(INPUT_GET, 'post_id', FILTER_SANITIZE_NUMBER_INT);

//TODO : fix sql 
$stmt = $db->prepare("SELECT posts.title, posts.content, posts.created_at, users.username FROM posts JOIN users ON posts.user_id = users.id WHERE posts.id = ?");
$stmt->execute([$postId]);
$post = $stmt->fetch(PDO::FETCH_ASSOC);


$commentsStmt = $db->prepare("SELECT comments.content, comments.created_at, users.username FROM comments JOIN users ON comments.user_id = users.id WHERE comments.post_id = ? ORDER BY comments.created_at DESC");
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
        <!-- Post Header -->
        <div class="post-header">
            <h2><?= htmlspecialchars($post['title']) ?></h2>
            <p>Posted by <span class="post-author"><?= htmlspecialchars($post['username']) ?></span> on <span class="post-date"><?= $post['created_at'] ?></span></p>
        </div>

        <!-- Post Content -->
        <div class="post-content">
            <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
        </div>

        <!-- Comments Section -->
        <div class="comments-section mt-5">
            <h3>Comments</h3>
            <?php foreach ($comments as $comment): ?>
                <div class="comment">
                    <p class="comment-author"><?= htmlspecialchars($comment['username']) ?></p>
                    <p class="comment-date"><?= $comment['created_at'] ?></p>
                    <p class="comment-content"><?= nl2br(htmlspecialchars($comment['content'])) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if (isset($_SESSION['user_id'])): ?>
            
            <div class="comment-form mt-5">
                <h4>Leave a Comment</h4>
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
</body>
</html>
