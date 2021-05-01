<?php

namespace App\Http\Middleware;

use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * このアプリケーションで信用するプロキシ
     *
     * @var string|array
     */
    protected $proxies = [
        '192.168.1.1',
        '192.168.1.2',
    ];

    /**
     * プロキシを検出するために使用するヘッダ
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}