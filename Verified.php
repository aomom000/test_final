<?php
    require_once "db.php";
    $myconn=new db();
    $myconn->connect();
    $count = 0;
   
    if(isset($_POST['insert_name'])){
        if($_POST['insert_pass']==$_POST['insert_conpass']){
             $data['name']=$_POST['insert_name'];
             $data['nickname']=$_POST['insert_nickname'];
             $data['pass']=$_POST['insert_pass'];
             $myconn->insertData($data);
             header("location: register.php");
        }
        else{
            echo "<script>alert('PASSWORD NOT MATCH')</script>";
            echo "  <a href='register.php'>Link back here...</a>";
        }
    }
        else if(isset($_POST['log_user'])){
            $rs=$mycon->varify_user($_POST['user'],$_POST['pass']);
            session_start();
            if($rs['n']==1){
                $_SESSION['name']=$rs['name'];
                $_SESSION['user']=$rs['user'];
                $_SESSION['type']=$rs['type'];
                header("location: Productlist.php");
        }else{
            echo "รหัสผ่านไม่ถูกต้อง";
            echo "  <a href='login.php'>Link back here...</a>";
        }
    }
    else if(isset($_POST['buyproid'])){
        $check = $myconn->showdatailproduct($_POST['buyproid']);
        session_start();
        if($_SESSION['name'] == ""){
            header("location: login.php");
        }else if($_POST['quantity']> $check['Stock_quantity']){
            echo "<script>alert('จำนวนที่ต้องการซื้อมีมากกว่าที่มีอยู่\nไม่สามารถทำรายการต่อได้')</script>";
            echo "<a href='ProductList.php'>back to Product List...</a>";
        }else{
            header("location: PO.php");
        }
}
?>