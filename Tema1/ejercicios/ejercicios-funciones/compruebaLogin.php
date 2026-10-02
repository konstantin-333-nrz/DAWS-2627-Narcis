<?php
    $users =[
        "nardra2" => "Z0rrO15",
        "fionaks008" => "quesoconpan",
        "iuliaiuliana" => "ayora123",
        "kivi2k26" => "unPoquitoDeSalmon"
    ];

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($users[$username]) && $users[$username] === $password){
        include "ok.php";
    }else{
        include "ko.php";
    }
?>