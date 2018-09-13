<?php
namespace Trista\Perm;
use Illuminate\Support\Facades\Facade;

class PermFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'perm';
    }
}
