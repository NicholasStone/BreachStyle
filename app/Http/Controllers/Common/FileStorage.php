<?php

namespace App\Http\Controllers\Common;


use Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

trait FileStorage
{
    private function save(UploadedFile $file, $path)
    {
        $hash = md5_file($file->getRealPath());
        $file_name = $path . '/' . $hash . "." .$file->getClientOriginalExtension();
        Storage::put($file_name, file_get_contents($file->getRealPath()));

        return Storage::url($file_name);
    }

    protected function saveImage(UploadedFile $file, $path)
    {
        return $this->save($file, 'uploadImages/' . $path);
    }

    protected function saveVideo(UploadedFile $file)
    {
        return $this->save($file, 'uploadVideos');
    }

    protected function saveFile(UploadedFile $file)
    {
        return $this->save($file, 'uploadFiles');
    }
}