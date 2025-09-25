<?php

namespace App\Domains;

use App\Traits\Instancer;

abstract class BaseDomain
{
    // Sugestão: Seguindo boas práticas da arquitetura DDD seria interessante  criar folder Entities dentro da pasta Domains para armazenar as entidades do sistema
    // Sugestão: Criar folders Repositories e ValueObjects para organizar melhor o código
    // Sugestão: Criar folder Infrastructure em Integrations.
    // Intuito:  Separar domínio, persistência, integrações e orquestração
    use Instancer;

    /**
     * Obter uma propriedade da classe
     *
     * @param string $prop
     *
     * @return mixed
     */
    public function __get(string $prop): mixed
    {
        return $this->{$prop};
    }
}
