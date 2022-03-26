<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\NewCandidacyRequest;
use App\Http\Traits\HandleFile;
use App\Models\Candidacy;
use App\Events\NewCandidacy;
use Illuminate\Http\JsonResponse;


class CandidacyController extends Controller
{
    use HandleFile;

    public function newCandidacy(NewCandidacyRequest $request): JsonResponse
    {
        $path_cv = $this->upload($request->file('file'));

        $payload = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'path_cv' => $path_cv,
            'portfolio' =>$request->portfolio,
            'linkedin' => $request->linkedin
        ];

        try {

            $candidate = Candidacy::create($payload);
            event(new NewCandidacy($candidate));
            return response()->json(['Sucesso' => 'Candidatura realizada com sucesso!'], 201);

        }catch (\Exception $exception){

            return response()->json(['Erro' => $exception->getMessage()], 404);

        }

    }

    public function getAllCandidacies(): JsonResponse
    {
        $candidacies = Candidacy::all();
        return response()->json($candidacies, 200);
    }



}
