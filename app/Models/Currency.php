<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Currency extends Model
{
    use HasFactory;

    public static function getRates()
    {
        try {
            return Http::get($_ENV['COMPLETE_API_URL']);
        } catch (\Exception $exception) {
            return "Error: {$exception->getMessage()}";
        }
    }
}
