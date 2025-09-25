<?php

namespace Tests;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    // Sugestão para testes unitários: 

    // Dataprovider para evitar repetição de código ao testar o mesmo método com vários cenários.
    // Criação de banco de teste
    // Cobrir cenários de falha
    // Utilização de refreshDatabase ao invés de DatabaseTransactions para evitar problemas com testes assíncronos.

    use WithFaker;
    use CreatesApplication;
    use DatabaseTransactions;
}
