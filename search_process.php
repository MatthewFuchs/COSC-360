<?php

function performSearch($query) {
   
    require 'database_connection.php';

    $searchResults = [];
    if (!empty($query)) {
        
        $query = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_STRING);

        // better implementation 
        $stmt = $db->prepare("SELECT * FROM posts WHERE title LIKE ?");
        $likeQuery = '%' . $query . '%';
        $stmt->execute([$likeQuery, $likeQuery]);

        $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $searchResults;
}
