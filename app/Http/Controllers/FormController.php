<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function upload(Request $request)
    {
        $path = 'images';
        $diskType = 'local';
        if (!$request->hasFile('image')) {
            return "Vui lòng chọn tệp cần upload";
        }

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $fileName = 'tranducphat.' . $extension;
        $image = $file->storeAs($path, $fileName, $diskType);

        if ($image) {
            echo "Tên file: " . $fileName . "<br>";
            echo "Loại file: " . $extension . "<br>";
            return "Lưu trữ thành công";
        } else {
            return "Lưu trữ thất bại";
        }
    }
}
