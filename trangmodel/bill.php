<?php 
    function insert_bill($name,$phone,$email,$address,$pay,$total){
        $conn = pdo_get_connection() ;
        $sql="INSERT INTO bill(name,phone,email,address,pay,total) values ('$name','$phone','$email','$address','$pay','$total')";
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        return $last_id;
    }
    function add_cart($idsp,$idbill,$name,$soluong){
        $sql= "INSERT INTO donhangchitiet(idsp,idbill,name,soluong) values ('$idsp','$idbill','$name','$soluong')";
        pdo_execute($sql);
    }
    function load_all_bill(){
        $sql="select * from bill order by id desc";
        $list_bill =pdo_query($sql);
        return $list_bill;
    }
    function load_all_chitiet(){
        $sql="select * from donhangchitiet order by id desc";
        $list_bill =pdo_query($sql);
        return $list_bill;
    } 
?>