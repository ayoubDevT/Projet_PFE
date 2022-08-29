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
        $dir = "storage/files/";
        $file->move($dir, $newName);
        $url = asset('storage/files/'.$newName);
        $ckedit = $request->input('CKEditorFuncNum');
        $status = "<script>window.parent.CKEDITOR.tools.callFunction('$ckedit', '$url', 'file secc')</script>";
        echo $status;
    }
}
