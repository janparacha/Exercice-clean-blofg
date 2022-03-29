<?php 
include('config/config.php');
include ('models/pdo.inc.php');

try {
    $query = 'SELECT cat_descr
    
    FROM blog_categories';
    
    // die($query);
    
    $req = $pdo -> query($query);
    
    $data = $req->fetchAll ();
   
    }
        
    catch (Exception $e) {
        die ('Erreur MySQL : ' . $e->getMessage());
    }