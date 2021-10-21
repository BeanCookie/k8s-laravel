<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function hello() {
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA',
            'log_level' => env('LOG_LEVEL'),
        ]);
    }
}
