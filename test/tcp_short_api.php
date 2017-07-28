<?php

use Workerman\Worker;
require_once __DIR__ . '/Workerman/Autoloader.php';

$worker = new Worker('tcp://0.0.0.0:2222');


$tcp_worker->onConnect = function ($connection)
    {
    mlog("tcpshort.php","new connection from ip " . $connection->getRemoteIp().":". $connection->getRemotePort(). "\n");
};

$worker->onMessage = function($connection, $data)
{
    var_dump($data);
    $connection->send('receive success');
};


$tcp_worker->onError = function ($connection, $code, $msg)
    {
        echo("error $code $msg\n");
        mlog("tcp_short.php", "error $code $msg\n");
};

// 运行worker
Worker::runAll();


?>