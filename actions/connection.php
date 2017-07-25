<?php

  $username  = "root";
  $password = "";
  $id_mysql = mysql_pconnect("localhost", $username, $password);
  if (! $id_mysql)
    die("Cannot open database connection");

  if (! mysql_select_db("teravin_technovations", $id_mysql))
    die("Database not available");

?>