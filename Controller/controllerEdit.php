<?php
  include_once "../model/ConDB.php";
  include_once "../model/Course.php";

  //สร้างตัวแปร
  $identifier = $_POST['identifier'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $team = $_POST['team'];
  $position = $_POST['position'];
  $image = $_POST['image'];


  //เรียกใช้
  $obj_name=new Team();
  $rs2=$obj_name->Edit($identifier,
  $first_name,
  $last_name,
  $team,
  $position,
  $image);

?>