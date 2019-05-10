<?php

namespace App\Http\Controllers;

use App\Http\Requests\TimeRequest;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function create(TimeRequest $request)
    {
        $time = $request->getTime();

        // do whatever you need to now.
    }
}
