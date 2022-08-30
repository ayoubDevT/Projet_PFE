<?php

namespace App\Http\Controllers;

use BaconQrCode\Renderer\Path\Move;
use Illuminate\Http\Request;

class ckupload extends Controller
{
    public function ckupload(Request $request)
    {
        $file = $request->upload;
        $fileName = $file->getClientOriginalName();
        $newName = time().$fileName;
        $dir = "images/files/";
        $file->move($dir, $newName);
        $url = asset('images/files/'.$newName);
        $ckedit = $request->input('CKEditorFuncNum');
        $status = "<script>window.parent.CKEDITOR.tools.callFunction('$ckedit', '$url')</script>";
        echo $status;
    }
}
