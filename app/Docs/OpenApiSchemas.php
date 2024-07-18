<?php

namespace App\Docs;

/**
 * @OA\Schema(
 *     schema="CepDetails",
 *     type="object",
 *     title="Cep Details",
 *     properties={
 *         @OA\Property(property="cep", type="string"),
 *         @OA\Property(property="label", type="string"),
 *         @OA\Property(property="logradouro", type="string"),
 *         @OA\Property(property="complemento", type="string"),
 *         @OA\Property(property="bairro", type="string"),
 *         @OA\Property(property="localidade", type="string"),
 *         @OA\Property(property="uf", type="string"),
 *         @OA\Property(property="ibge", type="string"),
 *         @OA\Property(property="gia", type="string"),
 *         @OA\Property(property="ddd", type="string"),
 *         @OA\Property(property="siafi", type="string")
 *     }
 * )
 */
class OpenApiSchemas
{
}