<?php
    include_once("../model/ConDB.php");
    include_once("../model/Course.php");
    $identifier = htmlspecialchars($_GET["identifier"]);

    $obj_name = new Team();
    $rs2 = $obj_name->getUserDetail($identifier);
    $jsonCode = $rs2;
    $jsonDecode = json_decode($jsonCode, true);
?>