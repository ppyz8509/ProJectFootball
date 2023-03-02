<?php
  include_once("../model/ConDB.php");
  include_once("../model/Course.php");

  $identifier = htmlspecialchars($_GET["identifier"]);

  $obj_name = new Team();
  $rs2 = $obj_name->Del($identifier);

?>