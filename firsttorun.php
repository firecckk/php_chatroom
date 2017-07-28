<?php

//!!!not yet done

require_once("./config.php");
$con = mysql_connect($mysql_address,$mysql_username,$mysql_passwd);
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

if (mysql_query("CREATE DATABASE chatroom_db",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }


mysql_close($con);

?>