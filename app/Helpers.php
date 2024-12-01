<?php

namespace App;

use Illuminate\Support\Str;

class Helpers {
    public static function getSlotsArray(array $data) {
        return collect($data)
            ->filter(fn($value, $key) => Str::startsWith($key, 'slot') && !is_null($value->attributes['name']))
            ->values();
    }
}
