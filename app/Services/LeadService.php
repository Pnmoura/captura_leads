<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Lead;

class LeadService
{
    public function create(array $request)
    {
        $lead = new Lead();
        $lead->nome = $request['nome'];
        $lead->cpf = $request['cpf'];
        $lead->email = $request['email'];
        $lead->cep = $request['cep'];
        $lead->numero = $request['numero'];
        $lead->complemento = $request['complemento'];
        $lead->logradouro = $request['logradouro'];
        $lead->bairro = $request['bairro'];
        $lead->cidade = $request['cidade'];
        $lead->uf = $request['uf'];
        $lead->save();
    }
}
