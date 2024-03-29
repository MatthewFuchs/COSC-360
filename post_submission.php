<?php
require 'database_connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $postTitle = filter_input(INPUT_POST, 'postTitle', FILTER_SANITIZE_STRING);
    $postContent = filter_input(INPUT_POST, 'postContent', FILTER_SANITIZE_STRING);
    $postCategory = filter_input(INPUT_POST, 'postCategory', FILTER_SANITIZE_STRING);
    $imagePath = null;


    if (empty($postTitle) || empty($postContent) || empty($postCategory)) {

        header('Location: createPost.php?error=Please fill in all required fields');
        exit;
    }

    // Handle file upload if an image was selected
    //TODO : figure out how to tackle imgs 

    if (isset($_FILES['postImage']) && $_FILES['postImage']['error'] == 0) {
        // Define the path to the upload directory
        //TODO : image uploads. 
        $uploadDir = 'uploads/';
        $imageName = time() . '_' . $_FILES['postImage']['name']; // Prefixing the filename with time() to ensure uniqueness
        $imagePath = $uploadDir . basename($imageName);

        // Move the file to the upload directory
        if (!move_uploaded_file($_FILES['postImage']['tmp_name'], $imagePath)) {
            
            $imagePath = null; // Reset image path if upload failed
        }
    }

   //TODO : switch 
    try {
        $stmt = $db->prepare("INSERT INTO posts (title, content, category, image_path) VALUES (?, ?, ?, ?)");
        $stmt->execute([$postTitle, $postContent, $postCategory, $imagePath]);

        
        header('Location: createPost.php?success=Post created successfully');
    } catch (PDOException $e) {
     
        header('Location: createPost.php?error=Failed to create the post');
    }
} else {
    
    header('Location: createPost.php');
    exit;
}
?>
