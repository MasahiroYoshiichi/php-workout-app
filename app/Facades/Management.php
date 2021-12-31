<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Services\ManagementService;

class Management extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ManagementService::class;
    }
}