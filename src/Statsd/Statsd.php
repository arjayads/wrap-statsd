<?php

namespace Statsd;

class Statsd {

    public static $client;

    public function __construct() {
        $connection = new UdpSocket(env('STATSD_HOST', 'localhost'), env('STATSD_PORT', 8125));
        self::$client = new Client($connection, env('STATSD_NAMESPACE', ''));
    }
}