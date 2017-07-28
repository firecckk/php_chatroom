<?php
class User{
    public $username;
    public $passwd;
    public $UID;
    public $session;
    public $superuser=FALSE;

    function __construct(){
        $num = func_num_args();
        $args = func_get_args();
        switch($num){
            default: die("in user.php on line 11 : user construct arguments error!/n");break;

            case 1: 
                $this->UID=$args[0];
                break;

            case 3: 
                $this->UID=$args[0];
                $this->username=$args[1];
                $this->passwd=$args[2];
                break;
        }
    }

    function setsession($s){
        $this->session=$s;
    }

    function setsuperuser($boolean){
        $this->superuser=$boolean;
    }
}
?>