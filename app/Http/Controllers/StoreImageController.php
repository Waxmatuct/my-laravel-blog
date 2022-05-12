<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Date\Date;

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
        $data = array();

        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:png,jpg,jpeg,webp|max:1024',
        ]);

        if ($validator->fails()) {
            $data['success'] = 0;
            $data['error'] = $validator->errors()->first('file');
        } else {
            //File upload
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            Storage::disk('public')->putFileAs('/images/' . date('Y') . '/' . Date::now()->format('n'), $file, $filename);

            //Response
            $data['success'] = 1;
            $data['message'] = 'Файлы загружены';
        }

        return response()->json($data);

    }
}
