<?php

$ip = '127.0.0.1';

// update with your port number
$port = 42;

$memcache_obj = new Memcache;
$memcache_obj->connect($ip, $port);
$memcache_obj->set('rule_1', 'You DO NOT talk about FIGHT CLUB');
$v = $memcache_obj->get('rule_1');

echo "$v\n";
