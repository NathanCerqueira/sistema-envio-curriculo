<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\NewCandidacyRequest;
use App\Http\Traits\HandleFile;
use App\Models\Candidacy;

class CandidacyController extends Controller
{
    use HandleFile;

    private $candidacy;

    public function __construct(Candidacy $candidacy)
    {
        $this->candidacy = $candidacy;
    }

    public function newCandidacy(NewCandidacyRequest $request)
    {
        $path_cv = $this->upload($request->allFiles());

        $payload = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'path_cv' => $path_cv,
            'portfolio' =>
                $request->input('portfolio') !== null ? $request->input('portfolio') : null,
            'linkedin' => $request->input('linkedin')
        ];

        $this->candidacy->save($payload);

    }
}
