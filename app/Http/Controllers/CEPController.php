<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CepService;

/**
 * @OA\Info(
 *     title="API de Consulta de CEP",
 *     version="1.0.0",
 *     description="API para consultar múltiplos CEPs utilizando o serviço ViaCEP."
 * )
 * 
 * @OA\PathItem(
 *     path="/api/search/local/{ceps}"
 * )
 */
class CEPController extends Controller
{
    protected $cepService;

    public function __construct(CepService $cepService)
    {
        $this->cepService = $cepService;
    }

    /**
     * @OA\Get(
     *     path="/api/search/local/{ceps}",
     *     operationId="getCepDetails",
     *     tags={"CEP"},
     *     summary="Get details of multiple CEPs",
     *     description="Returns details of multiple CEPs",
     *     @OA\Parameter(
     *         name="ceps",
     *         in="path",
     *         description="List of CEPs separated by commas",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/CepDetails")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad request"
     *     )
     * )
     */
    public function search($ceps)
    {
        $cepsArray = explode(',', $ceps);
        $result = $this->cepService->getCepsData($cepsArray);

        return response()->json($result);
    }
}