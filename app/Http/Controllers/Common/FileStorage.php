<?php

namespace App\Http\Controllers\Common;


use Intervention\Image\ImageManager;
use Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

trait FileStorage
{
    private function save(UploadedFile $file, $path)
    {
        $hash      = md5_file($file->getRealPath());
        $file_name = $hash . "." . $file->getClientOriginalExtension();

        $manager = new ImageManager();
        if (!is_dir(public_path($path) . '/')) {
            $this->makeDir(public_path($path) . '/');
        }
        $image = $manager->make($file);
        if($image->width() > 800){
            $image->resize(800, null, function ($c){
                $c->aspectRatio();
            });
        }
        $image->save(public_path($path) . '/' . $file_name);

        return env('APP_URL') . $path . '/' . $file_name;
//        Storage::put($file_name, file_get_contents($file->getRealPath()));
//        return Storage::url($file_name);
    }

    protected function saveImage(UploadedFile $file, $path)
    {
        return $this->save($file, 'uploadImages/' . $path);
    }

    protected function saveVideo(UploadedFile $file)
    {
        $hash      = md5_file($file->getRealPath());
        $file_name = $hash . "." . $file->getClientOriginalExtension();
        if ($file->isValid()) {
            $file->move(public_path('uploadVideos'), $file_name);

            return env('APP_URL') . 'uploadVideos/' . $file_name;
        }
    }

    protected function saveFile(UploadedFile $file)
    {
        return $this->save($file, 'uploadFiles/');
    }

    protected function makeDir($path)
    {
        $pathTree = explode('/', $path);
        array_pop($pathTree); //删除最后一个
        $path = '';
        foreach ($pathTree as $item) {
            $path .= $item . '/';
            is_dir($path) || mkdir($path);
        }
    }
}