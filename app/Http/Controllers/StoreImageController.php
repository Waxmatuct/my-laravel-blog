<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreImageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // dd($request->file());
        return response()->json(['message' => "Все ок"], 200);

    }
}
