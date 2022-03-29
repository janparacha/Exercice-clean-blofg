<?php 
include('config/config.php');
include ('models/pdo.inc.php');

try {
    $query = 'SELECT comment_content, display_name, post_title
    
    FROM blog_comments

    INNER JOIN blog_users
    ON comment_author = ID

    INNER JOIN blog_posts
    ON comment_post_ID = post_ID
    ';
    
    // die($query);
    
    $req = $pdo -> query($query);
    
    $data = $req->fetchAll ();
   
    }
        
    catch (Exception $e) {
        die ('Erreur MySQL : ' . $e->getMessage());
    }