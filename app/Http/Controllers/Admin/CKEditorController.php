<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Intervention\Image\Facades\Image;

class CKEditorController extends Controller
{
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $filenamewithextension= $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$extension;
            $request->file('upload')->storeAs('/', $filenametostore);
            $request->file('upload')->storeAs('thumbnail', $filenametostore);
            $thumbnailpath = asset('thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(500, 150, function($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($thumbnailpath);
     
            echo json_encode([
                'default' => asset($filenametostore),
                '500' => asset('thumbnail/'.$filenametostore)
            ]);
        }
    }
}
