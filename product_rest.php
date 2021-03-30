<?php
    include_once "db.php";

    if($_SERVER['REQUEST_METHOD']=='GET'){
        debug_text("GET METHOD Process...",$debug_mode);
        echo json_encode(show_product(),JSON_UNES);
    }else if($_SERVER['REQUEST_METHOD']=='POST'){
        debug_text("POST METHOD May be implement soon...", $debug_mode);
        $data['u_name'] = $_POST['u_name'];
        $data['u_age'] = $_POST['u_age'];
        add_data($debug_mode, $data);
        echo json_encode($messsage);
    }else{
        debug_text("Error this site Unsupport This request", $debug_mode);
        http_response_code(405);
    }

    function show_data($debug_mode){
        $mydb = new db("root","","person", $debug_mode);
        $data = $mydb->query("select * from person_db");
        $mydb->close();
        return $data;
    }
    function add_data($debug_mode, $data){
        $mydb = new db("root","","person", $debug_mode);
        $data = $mydb->query("INSERT INTO `person_db`(`name`, `age`) 
        VALUES ('{$data['u_name']}','{$data['u_age']}')");
        $mydb->close();
        return $data;
    }
    
?>