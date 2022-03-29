<?php 
include('config/config.php');
include ('models/pdo.inc.php');

try {
    $query = 'SELECT display_name
    
    FROM blog_users';
    
    // die($query);
    
    $req = $pdo -> query($query);
    
    $data = $req->fetchAll ();
   
    }
        
    catch (Exception $e) {
        die ('Erreur MySQL : ' . $e->getMessage());
    }