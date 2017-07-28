<?php
include_once "./classes/chatroom.php";
include_once "./classes/user.php";

$users=array();
$rooms=array();

function main(){
    global $users,$rooms;
    $superuser=registuser("root","root");
    $superuser->superuser=TRUE;
    createroom("public room","",$users[0]->UID);

}

function adduser(){
    
}

function registuser($username,$passwd){
    global $users;
    $UID = md5(uniqid(mt_rand(), true));
    $user=new User($UID,$username,$passwd);
    array_push($users,$user);
    return $user;
}

function createroom($roomname,$passwd,$creater_UID){
    global $rooms;
    $room = new room($roomname,$passwd,$creater_UID);
    array_push($rooms,$room);
}


function user_echo(){

}



?>