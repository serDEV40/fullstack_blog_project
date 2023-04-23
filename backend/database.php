<?php header("Access-Control-Allow-Origin: *"); ?>

<?php    
    try {
        $connect = new PDO("mysql:host=localhost;dbname=blog;charset=utf8","root","");
    } catch (PDOException $err) {
        die($err->getMessage());
    }
?>