<?php

namespace App\Services;

use Illuminate\Support\Facades\Facade;

class Custom extends Facade{
    protected static function getFacadeAccessor(): string{
        return "customKeyName";
    }
}