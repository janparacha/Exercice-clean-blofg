<?php 
include('config/config.php');
include ('models/pdo.inc.php');

try {
    $query = 'SELECT *
    
    FROM blog_contacts
    ';
    
    // die($query);
    
    $req = $pdo -> query($query);
    
    $data = $req->fetchAll ();
   
    }
        
    catch (Exception $e) {
        die ('Erreur MySQL : ' . $e->getMessage());
    }