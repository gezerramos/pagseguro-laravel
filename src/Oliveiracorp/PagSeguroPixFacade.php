<?php

namespace Oliveiracorp\PagSeguro;

use Illuminate\Support\Facades\Facade;

class PagSeguroPixFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pagseguro_pix';
    }
}
