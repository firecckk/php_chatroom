<?php
require_once (__DIR__."/../chatroom/chatroom.php");

$commands_ = array(" ","?","help","signin","signup","cd","ls");

$commands_help = "Usage:";

function handlecmd($w,$c,$line){

    $res="";

    switch ($line){
        default :
            $res=$w."".$c;
            break;

        case "help" | "?" :
            $res="help";
            break;

        case "clear" :
            for($i=0;$i<30;$i++){
                $res.=chr(0x07);  //Bell
                $res.=chr(0x0c);  //Form feed
            };
            break;

        case "ls" :
            $res="";
            break;

        case "cd" :
            $res="";
            break;

        case "send" :
            $res="";
            break;

        case "search" :
            $res="";
            break;
        
        case "test" :
            $res = chr(0x1c);
            break;
    }
return $res;
}

?>
