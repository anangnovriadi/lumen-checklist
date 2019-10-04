<?php

namespace App\Http\Controllers;

class SampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        return response()->json([
            'data' => [
                'one', 'two'
            ]
        ]);
    }
}
