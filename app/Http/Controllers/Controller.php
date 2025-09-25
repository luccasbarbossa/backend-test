<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Http\Responses\DefaultResponse;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    // Sugestão: Controllers devem apenas orquestrar requests e delegar ao UseCase
    // Sugestão: Adicionar no Controller documetação Swagger ou similar para facilitar entendimento e uso da API
    use DispatchesJobs;
    use ValidatesRequests;
    use AuthorizesRequests;

    /**
     * Helper para ser usado na resposta de todas as controllers filhas
     *
     * @param  DefaultResponse $response
     *
     * @return JsonResponse
     */
    public function response(DefaultResponse $response): JsonResponse
    {
        $jsonOptions = JSON_UNESCAPED_UNICODE + JSON_PRESERVE_ZERO_FRACTION;
        return response()->json($response->toArray(), $response->code, [], $jsonOptions);
    }
}
