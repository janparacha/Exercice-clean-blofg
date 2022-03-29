<?php 
include('config/config.php');
include ('models/pdo.inc.php');

try {
    $query = 'SELECT post_title, display_name, cat_descr
    
    FROM blog_posts
    
    INNER JOIN blog_users
    ON post_author = id

    INNER JOIN blog_categories
    ON post_category = cat_id
    ';
    
    // die($query);
    
    $req = $pdo -> query($query);
    
    $data = $req->fetchAll ();
   
    }
        
    catch (Exception $e) {
        die ('Erreur MySQL : ' . $e->getMessage());
    }