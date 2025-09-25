<?php

namespace App\UseCases;

use App\Traits\Logger;
use App\Traits\Instancer;

abstract class BaseUseCase
{
    // Sugestão: adicionar log de erro no catch para facilitar o debug.
    use Logger;
    use Instancer;
}
