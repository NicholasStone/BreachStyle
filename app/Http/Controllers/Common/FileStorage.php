<?php

namespace App\Http\Controllers\Common;


use App\Models\Application;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait FileStorage
{
    protected function putFile(UploadedFile $file, $path)
    {
        $hash = md5_file($file->getRealPath());
        Storage::put($path . '/' . $hash, file_get_contents($file->getRealPath()));

        return $hash;
    }

    protected function getFile($path, $hash)
    {
        return Storage::get($path . '/' . $hash);
    }
}