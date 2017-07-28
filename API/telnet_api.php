<?php
use Workerman\Worker;

require_once __DIR__."/../Workerman/Autoloader.php";
require_once "commands.php";
require_once "User.php";

// 创建一个Worker监听2222端口，不使用任何应用层协议
$tcp_worker = new Worker("tcp://0.0.0.0:2222");

// 启动4个进程对外提供服务
$tcp_worker->count = 4;

$tcp_worker->onConnect = function ($connection)
    {
    mlog("telnet_api.php","new connection from ip " . $connection->getRemoteIp() . "\n");
};

// 当客户端发来数据时
$tcp_worker->onMessage = function ($connection, $data)
    {
        global $tcp_worker;
    // 向客户端发送hello $data
    //echo(bin2hex($data));

    $data=str_replace(chr(0x0d),"",$data);
    $data=str_replace(chr(0x0a),"",$data);

    //echo(bin2hex($data));
    $worker_id=$tcp_worker->id;
    $connection_id=$connection->id;

    $res=handlecmd($worker_id,$connection->id,$data);

    $connection->send($res);
    //log echo
    echo ($connection->getRemoteIp().">");
    echo(var_dump($data));
    echo($res."\n\n");
};

$tcp_worker->onError = function ($connection, $code, $msg)
    {
        echo("error $code $msg\n");
        mlog("telnet_api.php", "error $code $msg\n");
};

// 运行worker
Worker::runAll();

?>