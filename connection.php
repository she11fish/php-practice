<?php
    try {    
        $db = new PDO('sqlite:products.sq3');
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>