<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'livewire/message/counter',
        'livewire/message/comments',
        'livewire/upload-file',
        'livewire/preview-file/*'
    ];
}
