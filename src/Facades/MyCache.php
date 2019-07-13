<?php
namespace Yjtec\MC\Facades;
use Illuminate\Support\Facades\Facade;
class MyCache extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mycache';
    }
}