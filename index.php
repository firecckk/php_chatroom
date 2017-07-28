<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="theme.css" />
<script language="javascript" type="text/javascript" src="./js/socket_connect.js"></script>
</head>
<body>
index<br>
<?php
//require_once("chatroom.php");
require_once("./chatroom/mlog.php");
require_once("./tools.php");
$b=new Bytes();
$res=$b->StrToBin("abc");
var_dump($res);
foreach($a as $res){
    echo $a . "<br>";
}

//mlog("index","123");
//mlog("index","46");
//phpinfo();
?>
</body>
</html>