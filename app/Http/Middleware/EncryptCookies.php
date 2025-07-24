<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;
use Illuminate\Support\Facades\Log;

class EncryptCookies extends Middleware
{
    public function __construct()
    {
        Log::info('EncryptCookies middleware is active.');
        parent::__construct(app());
    }

    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array<int, string>
     */
    protected $except = [
        'XSRF-TOKEN',
    ];
}
