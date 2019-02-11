<?php
    
    try{
        $Name = $_POST["Name"];
        $Email = $_POST["Email"];
        $PhoneNumber = $_POST["PhoneNumber"];
        $Feedback = $_POST["Feedback"];
        $Data = array(
            "Status"=>"1",
            "Name"=>$Name,
            "Email"=>$Email,
            "PhoneNumber"=>$PhoneNumber,
            "Feedback"=>$Feedback);
    }
    catch(Exception $e){
        $Data=array("Status"=>"0","Message"=>$e->Message);
    }
    echo(json_encode($Data));
?>