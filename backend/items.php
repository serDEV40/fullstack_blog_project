<?php
    include "./database.php";

    $ARRAY_DATA = array();
    $REQUEST = $_SERVER['REQUEST_METHOD'];

    if($REQUEST == "GET"){
        $GET_DATA = $connect->prepare("SELECT * FROM card_items");
        $GET_DATA->execute(); 
        $ARRAY_DATA[0] = json_encode($GET_DATA->fetchAll(PDO::FETCH_ASSOC));
        echo $ARRAY_DATA[0];
    }
    
    if($REQUEST == "POST"){
        json_decode(file_get_contents('php://input'),true);
        $SET_DATA = $connect->prepare("INSERT INTO contact_form SET contact_name=:contact_name, contact_mail=:contact_mail, contact_request=:contact_request");

        $INSERT_DATA = $SET_DATA->execute([
            'contact_name'=>$_POST['contact_name'],
            'contact_mail'=>$_POST['contact_mail'],
            'contact_request'=>$_POST['contact_request']
        ]);
    }

?>