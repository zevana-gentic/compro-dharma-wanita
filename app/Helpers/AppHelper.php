<?php

namespace App\Helpers;

use App\Models\Visitor;

class AppHelper {

    static function get_total_visitor()
    {
        $data = Visitor::first();

        return $data;
    }
}


