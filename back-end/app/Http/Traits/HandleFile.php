<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

trait HandleFile
{
    public function upload($file)
    {

        $path = Storage::putFile('curriculos', $file);

        return $path;
    }
    public function download($cv)
    {
        define("PATH_CV", 'curriculos/' . $cv);
        return Storage::download(PATH_CV);
    }
}
