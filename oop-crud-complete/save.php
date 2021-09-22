<?php
    include "database.php";
    $obj = new Database();

    if(isset($_POST['save'])){
        $name = $_POST['ename'];
        $age = $_POST['eage'];
        $city = $_POST['ecity'];
        $value = ["name"=>$name,"age"=>$age,"city"=>$city];
        if($obj->insert("employee",$value)){
            echo "<h2>INSERTED SUCCESSFULLY</h2>";
        }else{
            echo "<h2>CAN't INSERTED SUCCESSFULLY</h2>";
        }
    }
?>
