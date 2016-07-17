<?php

namespace App\Http\Controllers\Common;


use App\Models\Application;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait FileStorage
{
    protected function putFile(UploadedFile $file, Application $application, $path)
    {
        $application->file_type = $file->getMimeType();
        Storage::put($path . '/' . md5_file($file->getRealPath()), file_get_contents($file->getRealPath()));
        $application->save();

        return true;
    }

    protected function getFile($path, $hash)
    {
        return Storage::get($path . '/' . $hash);
    }
}