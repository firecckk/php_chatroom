<?php

class room{
    public $name;
    public $passwd;
    public $creater_UID;
    private $userlist=array();
    private $Suserlist=array();
    private $banlist=array();
    private $msgs=array();
    
    function __construct($name,$passwd,$creater_UID){
        $this->name=$name;
        $this->passwd=$passwd;
        $this->creater_UID=$creater_UID;
        $this->adduser($creater_UID);
        $this->addSuser($creater_UID);
    }
    
    public function adduser($user_UID){
        if(array_key_exists($user_UID,$this->userlist)){
            return false;
        }else{
            array_push($this->userlist,$user_UID);
            return true;
        }
    }
    
    public function deluser($user_UID){
        if(array_key_exists($user_UID,$this->userlist)){
            array_remove($this->userlist,$user_UID);
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function addSuser($user_UID){
        if(array_key_exists($user_UID,$this->userlist)){
            return false;
        }else{
            array_push($this->Suserlist,$user_UID);
            return true;
        }
    }
    
    public function delSuser($user_UID){
        if(array_key_exists($user_UID,$this->userlist)){
            array_remove($this->Suserlist,$user_UID);
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function addmsg($msg){
        array_push($this->msgs,$msg);
        return TRUE;
    }

    public function delmsg($msg){
        if(array_key_exists($msg,$this->msgs)){
            array_remove($this->msgs,$msg);
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    function array_remove($arr, $offset)
    {
        array_splice($arr, $offset, 1);
    }
}

class msg{
    public $sender;
    public $receiver;
    public $time;
    public $msg;

    function __construct($sender,$receiver,$time,$msg){
        $this->$sender=$sender;
        $this->$receiver=$receiver;
        $this->$time=$time;
        $this->$msg=$msg;
    }
}
?>