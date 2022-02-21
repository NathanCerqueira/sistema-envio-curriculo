<?php

namespace App\Http\Traits;


use Illuminate\Support\Facades\Storage;

trait HandleFile
{
    public function upload($file): string
    {
        $path = Storage::putFile('curriculum', $file);

        return $path;
    }
}
